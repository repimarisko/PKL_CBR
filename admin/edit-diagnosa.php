<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<?php
include '../koneksi.php';
?>
<form action="">
    <div class="edit-diagnosa">Edit Diagnosa</div>
    <div class="id-diagnosa">ID Diagnosa</div>
    <input type="text" name="id-diagnosa" class="kotak-id" />
    <div class="email-pendiagnosa">Email Pendiagnosa</div>
    <input type="email" class="kotak-pendiagnosa" name="email-diagnosa" />
    <div class="email-pengguna">Email Pengguna</div>
    <input type="email" class="kotak-pengguna" name="email-pengguna" />
    <div class="penyakit-edit">Penyakit</div>
    <p><select name="id_penyakit" id="id_penyakit" class="kotak-penyakit">
            <option value="">---Pilih Penyakit---</option>
            <?php
            $sql   = "SELECT * FROM penyakit";
            $hasil = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($hasil)) {
                echo "<option value='" . $row['kode_penyakit'] . "'>" . $row['nm_penyakit'] . "</option>";
            }
            ?>
        </select></p>
        <div class="gejala-edit">Gejala</div>
    <p><select name="id_gejala" id="id_gejala" class="kotak-gejala">
            <option value="">---Pilih Gejala---</option>
            <?php
            $sql   = "SELECT * FROM gejala";
            $hasil = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($hasil)) {
                echo "<option value='" . $row['kode_gejala'] . "'>" . $row['nm_gejala'] . "</option>";
            }
            ?>

    <input type="button" value="Simpan" class="tombol-simpan" />
        </select></p>
</form>

<body>
    <div class="header">

        <div class="side-nav">
            <a href="#" class="logo">
                <img src="../img/logo.png" class="logo-img">

            </a>

            <div class="logo-icon"></div>

            <ul class="nav-links">
                <li><a href="../daftar-penyakit.php">
                        <p>Penyakit</p>
                    </a></li>
                <li><a href="#">
                        <p>Gejala</p>
                    </a></li>
                <li><a href="#">
                        <p>Riwayat</p>
                    </a></li>
                <li><a href="#">
                        <p>User</p>
                    </a></li>
                <li><a href="#">
                        <p>Penyebab</p>
                    </a></li>
                <li><a href="#">
                        <p>Pengobatan</p>
                    </a></li>
                <li><a href="#">
                        <p>Solusi Penyakit</p>
                    </a></li>

                <div class="active"></div>
            </ul>
            <a href="#">
                <p class="logout">Logout</p>
            </a>
        </div>
        <style>form{ margin-bottom: 80px;}
        </style>
    </div>
  
    <div class="kotak-1"></div>
    <a href="#" class="nav-admin">Admin | Profile</a>
  






</body>

</html>