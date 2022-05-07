<?php 
 
include '../koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['kode_pengguna'])) {
    header("Location: setelahlogin.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM pengguna WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['kode_pengguna'] = $row['kode_pengguna'];
        header("Location: ../setelahlogin.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
