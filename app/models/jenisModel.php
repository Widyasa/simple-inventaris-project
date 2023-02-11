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
}