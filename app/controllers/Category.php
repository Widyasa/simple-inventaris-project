<?php
class Category extends Controller{

    public function index(){
        $data['title'] = "Kategori";
        $this->view('templates/header', $data);
        $this->view('templates/side-top-nav', $data);
        $this->view('pages/category', $data);
        $this->view('templates/footer', $data);
    }
}