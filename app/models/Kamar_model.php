<?php

class Kamar_model {
    private $table = 'jenis_kamar';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    public function getKamar(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKamarById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}