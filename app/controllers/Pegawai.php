<?php
class Pegawai extends Controller{

    public function index(){
        if(empty($_SESSION['user'])){
            redirect('auth/');
        }
        $data['total_pegawai'] = $this->model('pegawaiModel')->selectAllPegawai();
        $data['title'] = 'Pegawai';
        $this->view('templates/header', $data);
        $this->view('templates/side-top-nav', $data);
        $this->view('pages/pegawai', $data);
        $this->view('templates/footer', $data);
    }

    public function add(){
        if($this->model('pegawaiModel')->addPegawai($_POST)){
            redirect('pegawai');
        }
    }
    public function edit(){
        if($this->model('pegawaiModel')->editPegawai($_POST)){
            redirect('pegawai');
        }
        redirect('pegawai');
    }
    public function delete(){
        if($this->model('pegawaiModel')->deletePegawai($_POST['id_pegawai'])){
            redirect('pegawai');
        }
    }
}
