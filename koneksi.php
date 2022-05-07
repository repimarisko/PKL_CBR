<?php


session_start();
if (!isset($_SESSION['login'])) {
    header("location: session/login.php");
    exit;
}

	$server 		= "localhost";
	$user 			= "root";
	$password 		= "";
	$database 		= "manggis_cbr";

	$koneksi = mysqli_connect($server, $user, $password, $database);

	if(!$koneksi)
	    die("Koneksi Gagal : " . mysqli_connect_error());
	else
		//echo "Koneksi Berhasil";
?>