<?php
class ruangModel{
    private $ruang = 'ruang';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function selectALlRuang()
    {
        $this->db->query("select * from {$this->ruang}");
        return $this->db->resultSet();
    }

    public function addRuang($data)
    {
        $query = "insert into {$this->ruang} values (null, :nama_ruang, :kode_ruang, :keterangan)";
        $this->db->query($query);
        $this->db->bind('nama_ruang', $data['nama_ruang']);
        $this->db->bind('kode_ruang', $data['kode_ruang']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function editRuang($data)
    {
        $query = "update {$this->ruang} set `nama_ruang`=:nama_ruang, `kode_ruang`=:kode_ruang, `keterangan`=:keterangan where `id_ruang`=:id_ruang";
        $this->db->query($query);
        $this->db->bind('id_ruang', $data['id_ruang']);
        $this->db->bind('nama_ruang', $data['nama_ruang']);
        $this->db->bind('kode_ruang', $data['kode_ruang']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function deleteRuang($id)
    {
        $query = "delete from {$this->ruang} where `id_ruang`=:id_ruang";
        $this->db->query($query);
        $this->db->bind('id_ruang', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
