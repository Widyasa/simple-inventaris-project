<?php
class Petugas extends Controller{

    public function index(){
        if(empty($_SESSION['user'])){
            redirect('auth/');
        }
        $data['total_petugas'] = $this->model('petugasModel')->selectAllPetugas();
        $data['title'] = 'Petugas';
        $this->view('templates/header', $data);
        $this->view('templates/side-top-nav', $data);
        $this->view('pages/petugas', $data);
        $this->view('templates/footer', $data);
    }

    public function add(){
        if($this->model('petugasModel')->addPetugas($_POST)){
            redirect('petugas');
        }
    }
    public function edit(){
        if($this->model('petugasModel')->editPetugas($_POST)){
            redirect('petugas');
        }
        redirect('petugas');
    }
    public function delete(){
        if($this->model('petugasModel')->deletePetugas($_POST['id_petugas'])){
            redirect('petugas');
        }
    }
}
