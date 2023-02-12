<?php
class jenis extends Controller{

    public function index(){
        if(empty($_SESSION['user'])){
            redirect('auth/');
        }
        $data['total_jenis'] = $this->model('jenisModel')->selectAllJenis();
        $data['title'] = 'Category';
        $this->view('templates/header', $data);
        $this->view('templates/side-top-nav', $data);
        $this->view('pages/jenis', $data);
        $this->view('templates/footer', $data);
    }

    public function add(){
        if($this->model('jenisModel')->addJenis($_POST)){
            redirect('jenis');
        }
    }
    public function edit(){
        if($this->model('jenisModel')->editJenis($_POST)){
            redirect('jenis');
        }
        redirect('jenis');
    }
    public function delete(){
        if($this->model('jenisModel')->deleteJenis($_POST['id_jenis'])){
            redirect('jenis');
        }
    }
}