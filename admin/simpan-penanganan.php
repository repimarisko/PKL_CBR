
<?php
session_start();
if (!isset($_SESSION['loginadmin'])) {
	header("location: ../session/loginadmin.php");
	exit;
}
require 'function.php';
include "../koneksi.php";


if (isset($_POST['simpan'])) {

	$kode_penyakit = filter_data($_POST['kode_penyakit']);
	$nm_penyakit = filter_data($_POST['nm_penyakit']);
	$penanganan = filter_data($_POST['penanganan']);

	$qry= "INSERT INTO penanganan VALUES ('', '$kode_penyakit', '$nm_penyakit', '$penanganan')";
	mysqli_query($koneksi, $qry);

	if(mysqli_affected_rows($koneksi) > 0){
		echo "<script>alert('Data berhasil disimpan!');
		document.location.href='data-penanganan.php'; </script>";
		


	}
	else{
		echo "<script>alert('Data gagal disimpan!')
		document.location.href='data-penanganan.php';</script>";
	}
}
?>
