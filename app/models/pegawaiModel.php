<?php
class pegawaiModel
{
    private $pegawai = 'pegawai';
    private $level = 'level';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function selectAllPegawai()
    {
        $this->db->query("SELECT * FROM {$this->pegawai}");
        return $this->db->resultSet();
    }
    public function selectPeminjamByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->pegawai} WHERE `id_level`= 3 AND `username`=:username");
        $this->db->bind('username', $username);
        $this->db->execute();
        return $this->db->resultSingle();
    }
}
