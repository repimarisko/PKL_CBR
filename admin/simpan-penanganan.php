<?php
include "../koneksi.php";
function filter_data($data){
	$filter = stripslashes(strip_tags(htmlentities(htmlspecialchars($data,ENT_QUOTES))));    	
	return $filter;
}

if (isset($_POST['simpan']))
{
    $kode_penyakit         = filter_data($_POST['kode_penyakit']);
	$nm_penyakit	     = filter_data($_POST['nm_penyakit']);
	$penanganan	     = filter_data($_POST['penanganan']);

	if ($nm_penyakit=="" || $penanganan=="")
	{
	   echo  "<script>alert('Data Tidak Boleh Kosong');window.location ='tambah-penanganan.php';</script> ";	
	}		
	else
	{

		$sql = $koneksi->prepare("INSERT INTO penanganan (kode_penyakit, nm_penyakit, penanganan) 
								  VALUES (?, ?, ?)"); 
		
		$sql->bind_param("sss",$kode_penyakit, $nm_penyakit, $penanganan); 
		if($sql->execute()) {
			 echo "<script>alert('Data Berhasil Disimpan');window.location.href ='data-penanganan.php';</script> "; 
		} else {				
			echo "<script>alert('Data Gagal Disimpan ".mysqli_error($koneksi)."');
			      window.location ='tambah-penanganan.php';</script> ";
		}
		$sql->close();   
		$koneksi->close();
	}
}
else
{
   die("Akses dilarang...");
}
