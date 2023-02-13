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

    public function addPegawai($data)
    {
        $query = "insert into {$this->pegawai} values (null, :nama_pegawai, :nip, :alamat, :username, :password, :id_level)";
        $this->db->query($query);
        $this->db->bind('nama_pegawai', $data['nama_pegawai']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id_level', 3);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function editPegawai($data)
    {
        $query = "update {$this->pegawai} set `nama_pegawai`=:nama_pegawai, `nip`=:nip, `alamat`=:alamat, `username`=:username, `password`=:password where `id_pegawai`=:id_pegawai";
        $this->db->query($query);
        $this->db->bind('id_pegawai', $data['id_pegawai']);
        $this->db->bind('nama_pegawai', $data['nama_pegawai']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function deletePegawai($id)
    {
        $query = "delete from {$this->pegawai} where `id_pegawai`=:id_pegawai";
        $this->db->query($query);
        $this->db->bind('id_pegawai', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
