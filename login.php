<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>	
	<style type="text/css">
	body 
	{
	  background: #333333;
	  font-family: Arial, Helvetica, sans-serif;
	}
	.form-login {
	  padding: 20px;
	  margin: auto;
	  width: 30%;
	  background: #fff;
	  border-radius: 0px;
	}

	label 
	{
	  font-size: 11pt;
	  color: #555;
	}
	input[type="text"],input[type="password"],textarea {
	  padding: 8px;
	  width: 95%;		  
	  border: 1px solid #ccc;
	  border-radius: 0px;
	  resize: vertical;
	  font-size: 10pt;
	  margin: 6px 0px;
	}	
	input[type="submit"],input[type="reset"]{
	  padding: 8px;		 
	  border: 1px solid #ccc;
	  border-radius: 0px;
	  resize: vertical;
	  font-size: 10pt;
	  margin: 6px 0px;
	}	
	.merah{
		background-color: #f44336;
	}
	.biru{
		background-color: #008CBA;
	}	
	.pesan{
		background-color: #f44336;
		color: #fff;
		border: 1px solid #ccc;
		padding: 5px 5px 5px 5px;
		margin-bottom: 10px;
		font-size: 14px;
	}
	</style>
</head>	
<body>
	<h3 style="text-align:center;margin-top: 80px;color: #ffffff;">Halaman Login</h3>	
	<div class="form-login">		
		<?php
        if (isset($_SESSION['pesan']) && $_SESSION['pesan'] != '') {
        echo '<div  class="pesan">
        		 '.$_SESSION['pesan'].'
        	  </div>';
	    }
	    $_SESSION['pesan'] = '';
	    ?>
		<form action="session/session.php" method="post" onSubmit="return validasi_login()">						
			<label>Username</label>
			<input type="text" name="username" id="username" placeholder="Isi Username" required/>			
			
			<label>Password</label>
			<input type="password" name="password" id="password" placeholder="Isi Password" required/>
			
			<input type="submit" value="Login" name="simpan" class="biru">
			<input type="reset" value="Batal" name="batal" class="merah">			
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi_login() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>
</html>