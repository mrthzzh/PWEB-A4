<?php

class Individuals_model
{
    private $table = 'individuals';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addIndividuals($data)
    {
        $alamatId = $this->db->lastInsertId();
        $query = "INSERT INTO individuals (nama, no_telp, alamat_id, email, password) 
        VALUES (:nama, :no_telp, :alamat_id, :email, :password)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('alamat_id', $alamatId);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function login($data)
    {
        $query = "SELECT * FROM individuals WHERE email = :email";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $row = $this->db->single();
        if (password_verify($data['password'], $row['password'])) {
            return $row;
        } else {
            return false;
        }
    }
}
