<?php

class jenisModel{
    private $jenis = 'jenis';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function selectAllJenis()
    {
        $this->db->query("SELECT * FROM {$this->jenis}");
        return $this->db->resultSet();
    }

    public function addJenis($data)
    {
        $query = "INSERT INTO {$this->jenis} VALUES (NULL, :nama_jenis, :kode_jenis,  :keterangan)";
        $this->db->query($query);
        $this->db->bind('nama_jenis', $data['nama_jenis']);
        $this->db->bind('kode_jenis', $data['kode_jenis']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editJenis($data)
    {
        $query = "update {$this->jenis} set `nama_jenis`=:nama_jenis, `kode_jenis`=:kode_jenis, `keterangan`=:keterangan where id_jenis=:id_jenis" ;
        $this->db->query($query);
        $this->db->bind('id_jenis', $data['id_jenis']);
        $this->db->bind('nama_jenis', $data['nama_jenis']);
        $this->db->bind('kode_jenis', $data['kode_jenis']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteJenis($id)
    {
        $query = "delete from {$this->jenis} where `id_jenis`=:id_jenis";
        $this->db->query($query);
        $this->db->bind('id_jenis', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}