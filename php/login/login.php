<?php
session_start();
require_once '../koneksi_db.php';

// Cek apakah data dikirimkan via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk memeriksa user
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Ambil data user
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password
        if (md5($password) === $user['password']) {
            // Password cocok, redirect ke halaman utama
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_name'] = $user['nama_user'];
            header("Location: ../../index.html");
            exit();
        } else {
            // Password salah
            $_SESSION['error'] = "Password yang Anda masukkan salah.";
            header("Location: ../../login.php");
            exit();
        }
    } else {
        // Email tidak ditemukan
        $_SESSION['error'] = "Email tidak ditemukan. Silakan daftar terlebih dahulu.";
        header("Location: ../../login.php");
        exit();
    }
} else {
    // Jika tidak ada data POST, redirect ke halaman login
    header("Location: ../../login.php");
    exit();
}
?>