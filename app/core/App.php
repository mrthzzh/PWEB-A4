<?php

class App {
    public function __construct() {
        $url = $this->parseURL();
        var_dump($url);
    }

    // Ambil url diisi dengan url
    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/'); // Menghilangkan slice di belakang 
            $url = filter_var($url, FILTER_SANITIZE_URL); // Memfilter url agar bersih dari karakter aneh
            $url = explode('/', $url); // Memecah url dari tiap slice
            return $url;
        }
    }
}