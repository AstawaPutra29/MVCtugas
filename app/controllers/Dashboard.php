<?php
class Dashboard extends Controller
{
    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['layangan'] = $this->model('Layangan_model')->getAllLayang();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Layangan_model')->addDataLayangan($_POST) > 0) {
            Flasher::setFlash('berhasil', ' ditambahkan', 'success');
            header('Location:' . BASEURL . '/dashboard');
        } else {
            Flasher::setFlash('gagal', ' ditambahkan', 'danger');
            header('Location:' . BASEURL . '/dashboard');
        }
    }

    public function hapus($id)
    {
        if ($this->model('Layangan_model')->deleteDataLayangan($id) > 0) {
            Flasher::setFlash('berhasil', ' dihapus', 'success');
            header('Location:' . BASEURL . '/dashboard');
        } else {
            Flasher::setFlash('gagal', ' dihapus', 'danger');
            header('Location:' . BASEURL . '/dashboard');
        }
    }

    public function detail()
    {
        echo json_encode($this->model("Layangan_model")->getLayanganByID($_POST['id']));
    }

    public function edit()
    {
        if ($this->model('Layangan_model')->updateDataLayangan($_POST) > 0) {
            Flasher::setFlash('berhasil', ' diedit', 'success');
            header('Location:' . BASEURL . '/dashboard');
        } else {
            Flasher::setFlash('gagal', ' diedit', 'danger');
            header('Location:' . BASEURL . '/dashboard');
        }
    }
}
