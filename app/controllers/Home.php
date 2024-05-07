<?php

class Home extends Controller{
    public function index() {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index'); // Memanggil function index pada kelas home
        $this->view('templates/footer');
    }
}