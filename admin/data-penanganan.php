<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penanganan Penyakit</title>
</head>
<?php
include '../koneksi.php';
?>
<form action="">
    <div class="edit-diagnosa">Penanganan Penyakit</div>
    <div class="id-diagnosa">Nama Penyakit</div>
    <input type="text" name="id-diagnosa" class="kotak-id" />
    <p><select name="kode_diagnosa" id="kode_penanganan" class="kotak-id">
            <option value="">---Pilih Penyakit---</option>
            <?php
            $sql   = "SELECT * FROM penyakit";
            $hasil = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($hasil)) {
                echo "<option value='" . $row['kode_penanganan'] . "'>" . $row['nm_penyakit'] . "</option>";
            }
            ?>
        </select></p>
    <div class="email-penanganan">Penanganan</div>
    <input type="text" class="kotak-penanganan" name="penanganan" />

    <input type="button" value="Simpan" class="tombol-simpan" />
    </select></p>
</form>
<p class="coba">coba</p>

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