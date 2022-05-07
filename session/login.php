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
    
    <div class="kotak-body"></div>
    <div class="kotak-form"></div>

    <form action="login2.php" method="POST">
    <div class="sign-in">Sign In</div>
    <div class="username">email</div>
    <input type="email" value="<?php $email ?>" name="email" class="kotak-username" />
    <div class="password">password</div>
    <input type="password" value="<?php $password ?>" name="password" class="kotak-password" />
    <input type="submit" class="kotak-tombol-login"></div>
    <a class="login-p" href="#">Login</a>
</form>

<script>
    function zoom(){
        document.body.style.zoom= "90%";
    }
</script>
</body>
</html>