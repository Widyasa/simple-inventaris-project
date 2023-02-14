<?php
class inventarisModel{
    private $inventaris = 'inventaris';
    private $jenis = 'jenis';
    private $ruang = 'ruang';
    private $petugas = 'petugas';
    private $db ;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function selectInventaris()
    {
        $this->db->query("SELECT * FROM {$this->inventaris}");
        return $this->db->resultSet();
    }
    public function selectAllInventaris()
    {
        $this->db->query("SELECT {$this->inventaris}.*, {$this->ruang}.nama_ruang, {$this->jenis}.nama_jenis, {$this->petugas}.nama_petugas FROM ((({$this->inventaris} inner join {$this->petugas} on {$this->inventaris}.id_petugas = {$this->petugas}.id_petugas) inner join {$this->ruang} on {$this->inventaris}.id_ruang = {$this->ruang}.id_ruang) inner join {$this->jenis} on {$this->inventaris}.id_jenis = {$this->jenis}.id_jenis)");

        return $this->db->resultSet();
//        var_dump($this->db->resultSet());
    }

    public function insertInventaris()
    {
        $query = "insert into {$this->inventaris} values (:nama, :kondisi, :keterangan, :) ";
    }
}
