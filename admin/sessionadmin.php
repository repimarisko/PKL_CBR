<?php

session_start();
include "../koneksi.php";

if(isset($_POST['loginadmin'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result=mysqli_query($koneksi, "select * from admin where username='$username'");


	if(mysqli_num_rows($result) === 1){


		$row=mysqli_fetch_assoc($result);

		if (password_verify($password, $row['password'])) {

			$_SESSION['loginadmin']=true;
			header("location: ../admin/admin.php");
			exit;
		}
	}
	$error = true;
}
