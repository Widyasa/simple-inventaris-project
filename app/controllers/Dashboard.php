<?php
class Dashboard extends Controller{
    public function __construct()
    {

    }
    public function index(){
        if (empty($_SESSION['user']['id_petugas']) && empty($_SESSION['user']['id_pegawai']))   {
            redirect('auth/');
        } else {
            $data['title'] = "Dashboard";
            $data['total_petugas'] = count($this->model('petugasModel')->selectAllPetugas());
            $data['total_pegawai'] = count($this->model('pegawaiModel')->selectAllPegawai());
            $data['total_inventaris'] = count($this->model('inventarisModel')->selectAllInventaris());
            $data['total_jenis'] = count($this->model('jenisModel')->selectAllJenis());
            $this->view('templates/header', $data);
            $this->view('templates/side-top-nav', $data);
//            var_dump($_SESSION['id_level']); die();
            if ($_SESSION['user']['id_level']===1) {
                $this->view('pages/dashboard', $data);
            }
            if ($_SESSION['user']['id_level']===2) {
                $this->view('pages/dashboardOperator', $data);
            }
            if ($_SESSION['user']['id_level']===3) {
                $this->view('pages/dashboardPeminjam', $data);
            }
            $this->view('templates/footer', $data);
        }


        }


}