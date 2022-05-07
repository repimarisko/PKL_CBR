<?php
	if (isset($_POST['simpan'])) 
	{
			session_start();
	    	include '../koneksi.php';
			$username = strip_tags($_POST['username']);
			$password = strip_tags($_POST['password']);
			$status='1';

			$sql ="SELECT * FROM user WHERE username=? AND status=? ";
			$stmt = $koneksi->prepare($sql);
			$stmt->bind_param("ss", $username, $status);
			$stmt->execute();
			$hasil = $stmt->get_result();			
			if ($hasil->num_rows > 0) 
			{
				$data = mysqli_fetch_array($hasil);
				$nama = $data['nama_user'];
				$hash = md5($data['password']);

				if (password_verify($password, $hash) ) 
				{
					//set session
					$_SESSION['username'] 	  = $username;				
					$_SESSION['password'] 	  = $password;				
					$_SESSION['status_login'] = "sudah";

					echo "Login Berhasil";
					//echo '<meta http-equiv="refresh" content="0; url=admin/index.php">';
					header('Location: ../setelahlogin.php');
					exit();
				}
				else{
					$_SESSION['pesan'] = 'Password Salah';
					header("Location: ../login.php");
				}
			}
			else
			{
				$_SESSION['pesan'] = 'User tidak ditemukan';
				header("Location: ../login.php");
			}
			
	} 
	else
	{		
		header("Location: ../login.php");
	}
?>
