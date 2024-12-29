<?php
// Memasukkan koneksi database
require_once '../koneksi_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $telp = htmlspecialchars($_POST['telp']);
    $password = htmlspecialchars($_POST['password']);
    $repassword = htmlspecialchars($_POST['repassword']);
    $sex = htmlspecialchars($_POST['sex']);

    // Gabungkan firstname dan lastname
    $full_name = $firstname . ' ' . $lastname;

    $max_length = 144;
    $nama_user = substr($full_name, 0, $max_length);

    $hashed_password = md5($password);

    // Query insert
    $sql = "INSERT INTO user (nama_user, email, no_telp, password, jenis_kelamin) 
            VALUES ('$nama_user', '$email', '$telp', '$hashed_password', '$sex')";

    echo $sql;

    if ($conn->query($sql) === TRUE) {
        header(header: "Location: ../../login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>
