<?php
include "../koneksi.php";
$sql="SELECT * FROM pengguna WHERE email='$_POST[email]' AND password='$_POST[password]'";
session_start();

$_SESSION['email']=$_POST['email'];
$_SESSION['password'] = $_POST['password'];

if(isset($_SESSION['email'])and isset($_SESSION['password'])){
    echo "Selamat anda telah Login!";
}else{
    echo "Login Gagal!";
}
?>