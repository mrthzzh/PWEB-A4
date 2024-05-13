<?php

class Kamar_model {
    private $kmr = [
        [ 

        ]
    ];

    public function getKamar(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM jenis_kamar');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}