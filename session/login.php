<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body onload="zoom()">
    <?php include "../koneksi.php"; ?>

    <div class="kotak-body">
    <div class="kotak-form"></div>
        
        <form action="session.php" method="POST">
            <div class="sign-in">Sign In</div>
            <div class="username">Username</div>
            <input type="text" id="username" value="<?php $username ?>" name="username" class="kotak-username" />
            <div class="password">password</div>
            <input type="password" value="<?php $password ?>" name="password" class="kotak-password" />
            <input type="submit" name="login" class="kotak-tombol-login">

        </form>
        <div class="tambah-akun">Belum Punya Akun?<a href="register.php">Daftar</a></div>
        <script>
            function zoom() {
                document.body.style.zoom = "90%";
            }
        </script>
    </div>
</body>

</html>