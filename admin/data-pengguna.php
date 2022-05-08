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
    <link rel="stylesheet" href="../assets/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;

        }

        tr {
            padding: 4px;

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
            <table width="100%" bgcolor="#22B5DD">

                <tr bgcolor="#9d78b">
                    <td colspan="3" align="center"><b>Dafatar Pengguna</b></td>
                </tr>
                <tr bgcolor="#DBEAF5">
                    <td align="center" width="23" bgcolor="#9d78be"><b>No</b></td>
                    <td align="center" width="244" bgcolor="#9d78be"><strong>Profil Pengguna</strong></td>
                    <td align="center" width="20" bgcolor="#9d78be"><strong>Aksi</strong></td>
                </tr>
                <?php
                include "../koneksi.php";
                $sql = "SELECT * FROM user ORDER BY id";
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
                                <div align="left"><?php echo "<h3><em>$data[username]</em></h3>"; ?></div>
                                <ul style="list-style-type: none;">
                                    <li> <p>ID Pengguna: <?php echo "$data[id]"; ?></p>

                                    </li>
                                    <li><p>Email :<?php echo "$data[email]"; ?></p>
                                    </li>
                            </div>
                            </li>
                            </ul>

                        </td>
                        <td>

                            <div align="center">

                                <ul id="modif">
                                    <li><a href="hapus-pengguna.php?id= <?=$data['id'] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                            <img src="../img/hapus.png" width="50">
                                            <p>Hapus</p>
                                        </a></li>
                                    <li> <a href="ubah-penyakit.php">
                                            <img src="../img/edit.png" width="50">
                                            <p>Ubah</p>
                                        </a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </table>
            <a href="../session/register.php"> <button type="button" class="kotak-tambah" value="kembali" name="kembali" style="font-family: sans-serif;
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