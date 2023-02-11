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
        $this->db->query("SELECT * FROM {$this->petugas}");
        return $this->db->resultSet();
    }
    public function selectAdminByUsername($username)
    {
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
}
