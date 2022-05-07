<?php
include "../koneksi.php"; 
require '../function.php';

if (isset($_POST['daftar'])) {

    if(registrasi($_POST) > 0){
    echo "<script>alert('Berhasil di tambahkan')</script>";
    
}
else{
    echo mysqli_error($koneksi);
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Daftar</title>
</head>

<body onload="zoom()">
   

    <div class="kotak-daftar"></div>
        
        <form action="" method="POST">
            <div class="sign-up-daftar">Sign Up</div>
            <div class="username-daftar">Username</div>
            <input type="text" id="username" value="<?php $username ?>" name="username" class="kotak-username-daftar" />
            <div class="email-daftar">Email</div>
            <input type="email" id="email" value="<?php $email ?>" name="email" class="kotak-email-daftar" />
            <div class="password-daftar">Password</div>
            <input type="password" value="<?php $password ?>" name="password" class="kotak-password-daftar" />
            <input type="submit" class="tombol-daftar" name="daftar">
            <div class="daftar-daftar">Daftar</div>

        </form>
        <div class="tambah-akun">Sudah Punya Akun?<a href="login.php">Login</a></div>
        <script>
            function zoom() {
                document.body.style.zoom = "90%";
            }
        </script>
    </div>
</body>
</html>