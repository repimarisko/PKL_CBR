<?php
session_start();
if (!isset($_SESSION['loginadmin'])) {
    header("location: ../session/loginadmin.php");
    exit;
}
require 'function.php';
include "../koneksi.php";

$id = $_GET['id'];
$qry = query(" select * from user where id = '$id' ")[0];

if (isset($_POST['simpan'])) {

    if (ubahpengguna($_POST) > 0) {
        echo "<script>alert('Data berhasil diubah!');
    document.location.href='data-pengguna.php'; </script>";
    } else {
        echo "<script>alert('Data gagal diubah!');
    document.location.href='data-pengguna.php';</script>";
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
    <title>Ubah Pengguna</title>
</head>

<body>
    <div style="margin-top:10px;width:70%">
        <h3>Ubah Pengguna</h3>
        <form action="" method="post" onSubmit="return validasi_data()" enctype="multipart/form-data">
            <p><label>Kode Pengguna</label></p>
            <p><input type="text" name="kode_pengguna" id="kode_pengguna" value="<?= $qry['id']; ?>" required style="width:70%;"></p>

            <p><label>Nama</label></p>
            <p><input type="text" name="nama" id="nama" value="<?= $qry['username']; ?>" required style="width:70%;"></p>


            <p><label>Email</label></p>
            <p><input type="text" name="email" id="email" value="<?= $qry['email']; ?>" required style="width:70%;"></p>

            <p><label>Password</label></p>
            <p><input type="text" name="password" id="password" value="<?= $qry['password'] ; ?>" required style="width:70%;"></p>

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