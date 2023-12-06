<?php
class Home extends Controller
{
    public function index()
    {
        $data['judul'] = "Home";
        $data['layangan'] = $this->model('Layangan_model')->getAllLayang();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
