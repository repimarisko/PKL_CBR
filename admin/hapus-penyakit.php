<?php	
	include "../koneksi.php";
	if (isset($_GET['kode_penyakit']))
	{
		$id_penyakit  = $_GET['kode_penyakit'];
		
		$cek ="SELECT nm_penyakit FROM penyakit WHERE kode_penyakit=? LIMIT 1 ";
		$stmt = $koneksi->prepare($cek);
		$stmt->bind_param("i", $id_berita);
		$stmt->execute();
		$hasil = $stmt->get_result();			
		if ($hasil->num_rows > 0)   //Jika data ada didatabase
		{
			$data = mysqli_fetch_array($hasil);
		  
			
			$sql ="DELETE FROM penyakit WHERE kode_penyakit ='?' ";   //hapus data dari db
			$stmt = $koneksi->prepare($cek);
			$stmt->bind_param("i", $id_berita);
			$stmt->execute();
			if ($stmt->execute())
				echo "<script>alert('Data Berhasil Dihapus');window.location.href ='berita.php';</script> ";
			else
				echo "<script>alert('Data Gagal Dihapus');window.location.href ='berita.php';</script> ";
		}
		else //Jika data tidak ada didatabase
		{
			echo "<script>alert('Data Gagal Dihapus');window.location.href ='berita.php';</script> ";
		}
	}
	else
	{
		 die("Akses dilarang...");
	}
