<?php

class Login extends Controller
{
    public function index()
    {
        $data['title'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('auth/login');
        $this->view('templates/footer');
    }

    // Contoh Controller
    public function processLogin()
    {
        // // Panggil model untuk melakukan pengecekan login
        // $userData = $this->model->login($_POST);
        
        // if($userData) {
        //     // Login berhasil
        //     $_SESSION['user'] = $userData;
        //     header("Location: dashboard.php");
        //     exit();
        // } else {
        //     // Login gagal
        //     echo "Login failed. Please try again.";
        // }
    }
}