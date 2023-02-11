<?php
class Auth extends Controller {

    public function __construct()
    {
//        var_dump($_SESSION['id_petugas']);
//        die();

    }
    public function index(){
        if (isset($_SESSION['user']['id_petugas'])) {
            redirect('dashboard/index');
        }
        if (isset($_SESSION['user']['id_pegawai'])){
            redirect('dashboard/index');
        }

        $data['title'] = "Login";
        $this->view('templates/header', $data);
        $this->view('auth/login', $data);
        $this->view('templates/footer', $data);

    }
    public function createSession($user)
    {
        $_SESSION['user'] = $user;
    }

    public function verifyPassword($data)
    {
//        var_dump($_POST['password'] === $data['password']); die();
        if ($_POST['password'] === $data['password'])
        {
            $this->createSession($data);
            redirect('dashboard/');
        }
//        if ($_POST['password'] === $data['password'] && isset($data['id_petugas']))
//        {
//            $this->createSessionOperator($data);
//            redirect('dashboard/');
//        }
//        if ($_POST['password'] === $data['password'] && isset($data['id_pegawai']))
//        {
//            $this->createSessionPeminjam($data);
//            redirect('dashboard/');
//        }
        redirect('auth');
    }

    public function login()
    {
//        var_dump($_POST); die();
        $admin=$this->model('petugasModel')->selectAdminByUsername($_POST['username']);
        $operator=$this->model('petugasModel')->selectOperatorByUsername($_POST['username']);
        $peminjam=$this->model('pegawaiModel')->selectPeminjamByUsername($_POST['username']);
//        var_dump($admin);
//        var_dump($operator);
//        var_dump($peminjam);

//        var_dump($peminjam); die();

        if ($admin){
            $this->verifyPassword($admin);
        }
        if ($operator){
            $this->verifyPassword($operator);
        }
        if ($peminjam){
            $this->verifyPassword($peminjam);
        }
//        redirect('auth');
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user']['id_petugas']);
        unset($_SESSION['user']['id_pegawai']);
        redirect('auth');

    }

}