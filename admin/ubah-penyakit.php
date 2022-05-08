<?php
session_start();
if (!isset($_SESSION['loginadmin'])) {
    header("location: ../session/loginadmin.php");
    exit;
}
require 'function.php';
include "../koneksi.php";

$kode_penyakit = $_GET['kode_penyakit'];
$qry = query(" select * from penyakit where kode_penyakit = '$kode_penyakit' ")[0];

if (isset($_POST['simpan'])) {

    if (ubah($_POST) > 0) {
        echo "<script>alert('Data berhasil diubah!');
    document.location.href='daftar-penyakit.php'; </script>";
    } else {
        echo "<script>alert('Data gagal diubah!');
    document.location.href='daftar-penyakit.php';</script>";
    }
}
?>

<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="margin-top:10px;width:70%">
        <h3>Ubah Penyakit</h3>
        <form action="" method="post" onSubmit="return validasi_data()" enctype="multipart/form-data">
            <p><label>Kode Penyakit</label></p>
            <p><input type="text" name="kode_penyakit" id="kode_penyakit" value="<?= $qry['kode_penyakit']; ?>" required style="width:70%;"></p>

            <p><label>Nama Penyakit</label></p>
            <p><input type="text" name="nm_penyakit" id="nm_penyakit" value="<?= $qry['nm_penyakit']; ?>" required style="width:70%;"></p>


            <p><label>Penyebab</label></p>
            <p><input type="text" name="penyebab" id="penyebab" value="<?= $qry['penyebab']; ?>" required style="width:70%;"></p>

            <p><label>Solusi</label></p>
            <p><input type="text" name="solusi" id="solusi" value="<?= $qry['solusi']; ?>" required style="width:70%;"></p>

            <p>
                <input type="submit" value="simpan" name="simpan" style="background:#4F3267;padding:10px;color:#fff;border:0px;">
                <a href="daftar-penyakit.php"><input type="submit" value="batal" name="batal" style="background:#9D78B0;padding:10px;color:#fff;border:0px;"></a>

            </p>
        </form>
    </div>
</body>
<script type="text/javascript">
    function validasi_data() {
        var penanganan = document.getElementById("penanganan").value;

        if (penanganan != "") {
            return true;
        } else {
            alert('Data harus di isi !');
            return false;
        }
    }
</script>


</body>

</html>