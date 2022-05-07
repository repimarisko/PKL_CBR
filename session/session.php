<?php
include "../koneksi.php";

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result=mysqli_query($koneksi, "select * from pengguna where username='$username'");


	if(mysqli_num_rows($result) === 1){


		$row=mysqli_fetch_assoc($result);

		if(password_verify($password, $row['password']) ){
			header("location: ../setelahlogin.php");
			exit;
		}
	}
	$error = true;
}
?>