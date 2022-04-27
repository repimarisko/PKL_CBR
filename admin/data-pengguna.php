<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penyakit</title>
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

<body>
    <?php include "header.php" ?>
    <div class="header"></div>

    <div class="kotak-1"></div>
    <a href="#" class="nav-admin">Admin | Profile</a>

    <div class="admin-balitbu">Admin balitbu</div>






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
            <table width="100%" bgcolor="#22B5DD" class="kotak-penyakit1">

                <tr bgcolor="#9d78b">
                    <td colspan="4" align="center"><b>Dafatar Pengguna</b></td>
                </tr>
                <tr bgcolor="#DBEAF5">
                    <td align="center" width="23" bgcolor="#9d78be"><b>No</b></td>
                    <td align="center" width="244" bgcolor="#9d78be"><strong>Profil Pengguna</strong></td>
                    <td align="center" width="20" bgcolor="#9d78be"><strong>Aksi</strong></td>
                </tr>
                <?php
                include "../koneksi.php";
                $sql = "SELECT * FROM pengguna ORDER BY kode_pengguna";
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
                                <div align="left"><?php echo "<h3><em>$data[nm_pengguna]</em></h3>"; ?></div>
                                <ul style="list-style-type: none;">
                                    <li><label>ID Pengguna : <p><?php echo "$data[kode_pengguna]"; ?></p></label>

                                    </li>
                                    <li><label>Alamat : <p><?php echo "$data[alamat]"; ?></p></label>
                                    </li>
                            </div>
                            </li>
                            </ul>

                        </td>
                        <td>

                            <div align="center">

                                <ul id="modif">
                                    <li><a href="hapus-penyakit.php?kode_penyakit=$row[kode_penyakit]" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
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
    </script>

    </div>



</body>

</html>