<?php
session_start();
if (!isset($_SESSION['loginadmin'])) {
    header("location: ../session/loginadmin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penyakit</title>
    <style>
        table {
            margin-top: 140px;
            width: 1670px;
            border: 1px solid black;
            border-collapse: collapse;

        }

        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;

        }

        tr {
            padding: 8px;

        }

        ul#modif li {
            display: inline;

        }
    </style>
</head>

<body onload="zoom()">
    <?php include "header.php" ?>
    <div class="header"></div>

    <div class="kotak-1"></div>
    <a href="#" class="nav-admin">Admin | Profile</a>







    <?php
    $batas = 3;  //jumlah data yang akan ditampilkan per halaman
    $halaman = @$_GET['halaman']; // mengecek halaman ke berapa
    if (empty($halaman)) {
        $posisi = 0;
        $halaman = 1;
    } else {
        $posisi = ($halaman - 1) * $batas;
    }
    ?>

    <div>
        <div>
            <table bgcolor="#22B5DD">

                <tr bgcolor="#9d78b">
                    <td colspan="4" align="center"><b>Dafatar Penyakit Manggis dalam Sistem</b></td>
                </tr>
                <tr bgcolor="#DBEAF5">
                    <td align="center" width="23" bgcolor="#9d78be"><b>No</b></td>
                    <td align="center" width="244" bgcolor="#9d78be"><strong>Nama Penyakit</strong></td>
                    <td align="center" width="23" bgcolor="#9d78be"><b>Penyebab</b></td>
                    <td align="center" width="20" bgcolor="#9d78be"><strong>Aksi</strong></td>
                </tr>
                <?php
                include "../koneksi.php";
                $sql = "SELECT * FROM penyakit,penanganan WHERE penyakit.kode_penyakit=penanganan.kode_penyakit ORDER BY penyakit.kode_penyakit";
                $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($koneksi));
                $no = 0;
                while ($data = mysqli_fetch_array($qry)) {
                    $no++;
                ?>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center"><?php echo $no; ?></div>
                        </td>
                        <td>
                            <div align="left">
                                <div align="left"><?php echo "<h3><em>$data[nm_penyakit]</em></h3>"; ?></div>
                                <ul style="list-style-type: none;">

                            </div>
                            </li>
                            </ul>

                        </td>
                        <td>
                            <div align="center"><?php echo "$data[penyebab]"; ?></div>
                        </td>
                        <td>

                            <div align="center">
                                <ul id="modif">
                                    <li><a href="hapus-penanganan.php?kode_penyakit=$data[kode_penyakit]" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                            <img src="../img/hapus.png" width="50">

                                        </a></li>

                                </ul>

                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <a href="tambah-penanganan.php"> <button type="button" class="kotak-tambah" value="kembali" name="kembali" style="font-family: sans-serif;
    font-size: 15px;
    background: #4F3267;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 12px 20px;
    margin-top: 10px">Tambah</button></a>

        </div>
    </div>
    <script type="text/javascript">
        function konfirmasi() {
            var cek = confirm("Yakin Akan dihapus?");
            if (cek)
                return true;
            else
                return false;

        }

        function zoom() {
            document.body.style.zoom = "67%";
        }
    </script>

    </div>



</body>

</html>