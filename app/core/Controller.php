<?php

// Kelas utama dari folder controllers
class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }

}