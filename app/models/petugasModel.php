<?php

class petugasModel
{
    private $petugas = 'petugas';
    private $level = 'level';

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function selectAllPetugas()
    {
        $this->db->query("SELECT * FROM {$this->petugas} where id_level = 2");
        return $this->db->resultSet();
    }
    public function selectAdminByUsername($username)
    {
        var_dump($username); die;
        $this->db->query("SELECT * FROM {$this->petugas} WHERE `id_level` = 1 AND `username`=:username");
        $this->db->bind('username', $username);
        $this->db->execute();
        return $this->db->resultSingle();
    }
    public function selectOperatorByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->petugas} WHERE `id_level` = 2 AND `username`=:username");
        $this->db->bind('username', $username);
        return $this->db->resultSingle();
    }

    public function addPetugas($data)
    {
        $query = "insert into {$this->petugas} values (null, :username, :password, :nama_petugas, :id_level)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->bind('id_level', 2);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function editPetugas($data)
    {
        $query = "update {$this->petugas} set `username`=:username, `password`=:password, `nama_petugas`=:nama_petugas where id_petugas=:id_petugas";
        $this->db->query($query);
        $this->db->bind('id_petugas', $data['id_petugas']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePetugas($id)
    {
        $query = "delete from {$this->petugas} where `id_petugas`=:id_petugas";
        $this->db->query($query);
        $this->db->bind('id_petugas', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
