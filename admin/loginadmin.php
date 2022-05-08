
<?php 
session_start();

if(isset($_SESSION['login'])){
    header("location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>

<body onload="zoom()">
    <?php include "../koneksi.php"; ?>

    <div class="kotak-body">
    <div class="kotak-form"></div>
        
        <form action="sessionadmin.php" method="POST">
            <div class="sign-in">Admin</div>
            <div class="username">Username</div>
            <input type="text" id="username" value="<?php $username ?>" name="username" class="kotak-username" />
            <div class="password">password</div>
            <input type="password" value="<?php $password ?>" name="password" class="kotak-password" />
            <input type="submit" name="loginadmin" class="kotak-tombol-login">
            <div class="kirim-login">Kirim</div>

        </form>
        <script>
            function zoom() {
                document.body.style.zoom = "90%";
            }
        </script>
    </div>
</body>

</html>