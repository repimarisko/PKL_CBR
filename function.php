<?php

session_start();
if (!isset($_SESSION['login'])) {
    header("location: session/login.php");
    exit;
}


 function registrasi($data){
    include "koneksi.php";

    $username = strtolower(stripslashes($data["username"]));
    $email = ($data["email"]);
    $password = mysqli_real_escape_string($koneksi,$data["password"]);
    $password= password_hash($password, PASSWORD_DEFAULT);
    // cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username sudah digunakan!')</script>";
        return false;
    }
   
    mysqli_query($koneksi, "INSERT INTO user VALUES('','$username','$email','$password')");
    return mysqli_affected_rows($koneksi);
}
?>