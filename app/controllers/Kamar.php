<?php

class Kamar extends Controller{
    public function index() {
        if ( !$_SESSION[ 'user' ] ) {
            header( 'location:' . BASEURL . 'log' );
        } else {
            $data['judul'] = 'Daftar Kamar';
            $data['kamar'] = $this->model('Kamar_model')->getKamar();
            $this->view('templates/header', $data); // data jududl dikirim ke folder teplates class header
            $this->view('kamar/index', $data); // data berupa nama dikirim ke file index di view
            $this->view('templates/footer'); // class view ni menyimpan ke arah folder view
        }
    }
    public function detail($id) {
        if ( !$_SESSION[ 'user' ] ) {
            header( 'location:' . BASEURL . 'log' );
        } else {
            // echo $id;
            $data['judul'] = 'Detail Kamar';
            $data['kamar'] = $this->model('Kamar_model')->getKamarById($id);
            $this->view('templates/header', $data);
            $this->view('kamar/detail', $data);
            $this->view('templates/footer');
        }
    }

    public function tambah() {
        if ( !$_SESSION[ 'user' ] ) {
            header( 'location:' . BASEURL . 'log' );
        } else {
            $data['judul'] = 'Form Tambah Data Kamar';
            $this->view('templates/header', $data);
            $this->view('kamar/tambahKamar');
            $this->view('templates/footer');
        }
        
    }

    public function tambahBaru() {
        if ($this->model('Kamar_model')->tambahKamar($_POST) > 0) {
            header('Location: ' . BASEURL . '/kamar');
            exit;
        }
    }
}
