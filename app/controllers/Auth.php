<?php

class Auth extends Controller
{
    private $authModel;

    public function __construct()
    {
        $this->authModel = $this->model('Auth_model');
    }

    public function index()
    {
        $data['judul'] = "Login";
        $this->view('templates/header', $data);
        $this->view('auth/login');
        $this->view('templates/footer');
    }

    public function login()
    {
        $data['judul'] = "Login";
        $this->view('templates/header', $data);
        $this->view('auth/login');
        $this->view('templates/footer');

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->authModel->getUserByUsername($username);

            if ($user) {
                if ($username === $user['username'] && $password === $user['password'] && $user['level'] === 2) {
                    $_SESSION['username'] = $user['username'];
                    Flasher::setFlash('berhasil', ' login', 'success');
                    header('Location:' . BASEURL . '/dashboard');
                    exit;
                } else if ($username === $user['username'] && $password === $user['password'] && $user['level'] === 1) {
                    $_SESSION['username'] = $user['username'];
                    Flasher::setFlash('berhasil', ' login', 'success');
                    header('Location:' . BASEURL . '/home');
                    exit;
                } else {
                    Flasher::setFlash('gagal', ' login. Periksa username dan password.', 'danger');
                    header('Location:' . BASEURL . '/auth/login');
                    exit();
                }
            } else {
                // Username tidak ditemukan
                Flasher::setFlash('gagal', ' login. Periksa username dan password.', 'danger');
                header('Location:' . BASEURL . '/auth');
                exit();
            }
        }
    }
    public function logout()
    {
        // Hapus semua sesi
        session_unset();
        // Hancurkan sesi
        session_destroy();
        // Arahkan ke halaman login
        header('Location:' . BASEURL . '/auth/login');
        exit();
    }
}
