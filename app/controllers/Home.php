<?php

class Home extends Controller{
    public function index() {
        if ( !$_SESSION[ 'user' ] ) {
            header( 'location:' . BASEURL . 'log' );
        } else {
            $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data); // data jududl dikirim ke folder teplates class header
        $this->view('home/index', $data); // data berupa nama dikirim ke file index di view
        $this->view('templates/footer'); // class view ni menyimpan ke arah folder view
        }
        
    }
}
