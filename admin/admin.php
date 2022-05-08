<?php
session_start();
if (!isset($_SESSION['loginadmin'])) {
    header("location: ../session/loginadmin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body onload="zoom()">
    <?php include "header.php" ?>
    <div class="header"></div>
    <div class="kotak-2"></div>

    <a href="#" class="nav-admin">Admin | Profile</a>
    <div class="selamat-datang">Selamat Datang</div>
    <div class="admin-balitbu">Admin balitbu</div>

    <div class="kotak-1"></div>
    <div class="kotak-2"></div>
    <a class="kotak-3" href="daftar-penyakit.php"></a>
    <a class="kotak-16" href="data-gejala.php"></a>
    <a class="kotak-11" href="data-penanganan.php"></a>
    <a class="kotak-13" href="data-diagnosa.php"></a>
    <a class="kotak-14" href="data-pengguna.php"></a>
    <a class="kotak-15" href="data-pertanyaan.php"></a>




    <!--  -->


    <div class="daftar-1">Penyakit</div>
    <div class="lihat-penyakit">Lihat, ubah dan hapus data penyakit</div>
    <div class="gam-admin-1"><img src="../img/daftar-admin.png" height="48"></div>

    <div class="penanganan-1">Penanganan</div>
    <div class="lihat-penanganan">Lihat, tambah dan hapus data penanganan</div>
    <div class="gam-solution"><img src="../img/level.png" height="50"></div>

    <div class="gejala-1">Gejala</div>
    <div class="lihat-gejala">Lihat data gejala</div>
    <div class="gam-level"><img src="../img/solutions.png" height="50"></div>

    <div class="daftar-2">Diagnosa</div>
    <div class="lihat-diagnosa">Lihat dan hapus data diagnosa</div>
    <div class="gam-admin-2"><img src="../img/daftar-admin.png" height="50"></div>

    <div class="pertanyaan-1">Pengguna</div>
    <div class="lihat-pertanyaan">Lihat, tambah dan hapus data pengguna</div>
    <div class="gam-pertanyaan"><img src="../img/user.png" height="50"></div>

    <div class="pengguna-1">Pertanyaan</div>
    <div class="lihat-pengguna">Lihat, jawab dan hapus data pertanyaan</div>
    <div class="gam-user"><img src="../img/pertanyaan.png" height="50"></div>
</body>
<script>
    function zoom() {
        document.body.style.zoom = "67%";
    }
</script>

</html>