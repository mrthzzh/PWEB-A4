<?php

require_once '../app/init.php';

session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['id'])) {
    // Jika pengguna belum login, arahkan ke halaman login
    header('Location: ' . BASEURL . '/login');
    exit;
}

// Menjalankan kelas App
$app = new App;
