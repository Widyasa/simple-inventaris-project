<?php
class Inventaris extends Controller{

    public function index(){
        if(empty($_SESSION['user'])){
            redirect('auth/');
        }
        $data['total_inventaris'] = $this->model('inventarisModel')->selectAllInventaris();
        $data['title'] = 'Inventaris';
        $this->view('templates/header', $data);
        $this->view('templates/side-top-nav', $data);
        $this->view('pages/inventaris', $data);
        $this->view('templates/footer', $data);
    }

    public function add(){
        $data['jenis']=$this->model('jenisModel')->selectAllJenis();
        $data['ruang']=$this->model('ruangModel')->selectAllRuang();
//        $data['jenis']=$this->model('jenisModel')->selectAllJenis();
        if($this->model('jenisModel')->addJenis($_POST)){
            redirect('jenis');
        }
    }
    public function edit(){
        $data['ruang']=$this->model('ruangModel')->selectAllRuang();
        $data['jenis']=$this->model('jenisModel')->selectAllJenis();

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