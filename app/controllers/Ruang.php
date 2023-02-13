<?php
class Ruang extends Controller{

    public function index(){
        if(empty($_SESSION['user'])){
            redirect('auth/');
        }
        $data['total_ruang'] = $this->model('ruangModel')->selectAllRuang();
        $data['title'] = 'Ruang';
        $this->view('templates/header', $data);
        $this->view('templates/side-top-nav', $data);
        $this->view('pages/ruang', $data);
        $this->view('templates/footer', $data);
    }

    public function add(){
        if($this->model('ruangModel')->addRUang($_POST)){
            redirect('ruang');
        }
    }
    public function edit(){
        if($this->model('ruangModel')->editRuang($_POST)){
            redirect('ruang');
        }
        redirect('ruang');
    }
    public function delete(){
        if($this->model('ruangModel')->deleteRuang($_POST['id_ruang'])){
            redirect('ruang');
        }
    }
}
