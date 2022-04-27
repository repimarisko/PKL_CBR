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
    <div class="edit-diagnosa">Edit Penanganan</div>
    <div class="id-diagnosa">ID Penanganan</div>
    <input type="text" name="id-diagnosa" class="kotak-id" />
    <p><select name="kode_diagnosa" id="kode_penanganan" class="kotak-id">
            <option value="">---Pilih ID---</option>
            <?php
            $sql   = "SELECT * FROM penanganan";
            $hasil = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($hasil)) {
                echo "<option value='" . $row['kode_penanganan'] . "'>" . $row['kode_penanganan'] . "</option>";
            }
            ?>
        </select></p>
    <div class="email-pendiagnosa">Email Penangan</div>
    <input type="email" class="kotak-pendiagnosa" name="email-diagnosa" />
    <div class="email-pengguna">Nama Penangan</div>
    <input type="text" class="kotak-pengguna" name="Nama" />
    <div class="penyakit-edit">Penangan</div>
    <input type="text" class="kotak-penangan" name="penanganan" />
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
    <?php include "header.php" ?>
    <div class="header">

        <style>
            form {
                margin-bottom: 80px;
            }
        </style>
    </div>

    <div class="kotak-1"></div>
    <a href="#" class="nav-admin">Admin | Profile</a>







</body>

</html>