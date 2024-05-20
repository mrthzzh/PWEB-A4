<?php

class About extends Controller{
    // Method default
    public function index() {
        if ( !$_SESSION[ 'user' ] ) {
            header( 'location:' . BASEURL . 'log' );
        } else {
            $data[ 'judul' ] = 'About';
            $this->view( 'templates/header', $data );
            $this->view( 'about/index' );
            $this->view( 'templates/footer' );
        }
    }
    public function page() {
        if ( !$_SESSION[ 'user' ] ) {
            header( 'location:' . BASEURL . 'log' );
        } else {
            $data[ 'judul' ] = 'Page';
            $this->view( 'templates/header', $data );
            $this->view( 'about/page' );
            $this->view( 'templates/footer' );
        }
    }
}
