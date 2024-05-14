<?php

class Kamar extends Controller{
    public function index() {
        $data['judul'] = 'Daftar Kamar';
        $data['kamar'] = $this->model('Kamar_model')->getKamar();
        $this->view('templates/header', $data); // data jududl dikirim ke folder teplates class header
        $this->view('kamar/index', $data); // data berupa nama dikirim ke file index di view
        $this->view('templates/footer'); // class view ni menyimpan ke arah folder view
    }

    public function detail($id) {
        echo $id;
        $data['judul'] = 'Detail Kamar';
        $data['kamar'] = $this->model('Kamar_model')->getKamarById($id);
        $this->view('templates/header', $data);
        $this->view('kamar/detail', $data);
        $this->view('templates/footer');
    }
}