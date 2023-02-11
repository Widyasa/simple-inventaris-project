<?php
class jenis extends Controller{

    public function index(){
        if(empty($_SESSION['user'])){
            redirect('auth/');
        }
        $data['title'] = 'Category';
        $this->view('templates/header', $data);
        $this->view('templates/side-top-nav', $data);
        $this->view('pages/jenis', $data);
        $this->view('templates/footer', $data);
    }
}