<?php

class Auth_model {
    private $table = 'individuals';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
    }

}