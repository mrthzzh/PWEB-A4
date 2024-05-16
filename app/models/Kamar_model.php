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

    public function tambahKamar($data) {
        $query = "INSERT INTO jenis_kamar (jenis_kamar, harga, deskripsi)
                    VALUES
                    (:jenis_kamar, :harga, :deskripsi)";
        $this->db->query($query);
        $this->db->bind('jenis_kamar', $data['jenis_kamar']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}