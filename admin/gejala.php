<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Gejala</title>
    <style>
        table,
        th {
            border: 1px solid black;
            border-collapse: collapse;

        }

        tr,
        td {
            padding: 5px;
            border: 1px solid black;


        }
    </style>
</head>

<body>
    <div class="header">

        <div class="side-nav">
            <a href="#" class="logo">
                <img src="../img/logo.png" class="logo-img">

            </a>

            <div class="logo-icon"></div>

            <ul class="nav-links">
                <li><a href="daftar-penyakit.php">
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
    </div>

    <div class="kotak-1"></div>
    <a href="#" class="nav-admin">Admin | Profile</a>

    <div class="admin-balitbu">Admin balitbu</div>




    <!--  -->



    <!--  -->

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
                    <td colspan="4" align="center"><b>Dafatar Gejala pada sistem</b></td>
                </tr>
                <tr bgcolor="#DBEAF5">
                    <td align="center" width="1" bgcolor="#9d78be"><b>No</b></td>
                    <td align="center" width="2" bgcolor="#9d78be"><strong>Kode Gejala</strong></td>
                    <td align="center" width="200" bgcolor="#9d78be"><strong>Gejala</strong></td>
                </tr>
                <?php
                include "../koneksi.php";
                $sql = "SELECT * FROM gejala ORDER BY kode_gejala";
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

                            <div align="center"><?php echo "<h4><em>$data[kode_gejala]</em></h4>"; ?></div>

                        </td>
                        <td>
                            <div align="left"><?php echo "$data[nm_gejala]"; ?></div>
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