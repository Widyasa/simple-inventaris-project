<?php
class inventarisModel{
    private $inventaris = 'inventaris';
    private $jenis = 'jenis';
    private $db ;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function selectAllInventaris()
    {
        $this->db->query("SELECT * FROM {$this->inventaris}");
        return $this->db->resultSet();
    }
}
