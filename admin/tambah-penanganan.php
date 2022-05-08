<?php
session_start();
if (!isset($_SESSION['loginadmin'])) {
    header("location: ../session/loginadmin.php");
    exit;
}
?>

<?php
include "../koneksi.php";
?>
<div style="margin-top:10px;width:70%">
    <h3>Tambah data Penanganan</h3>
    <form action="simpan-penanganan.php" method="post" onSubmit="return validasi_data()" enctype="multipart/form-data">
        <p><label>Nama Penyakit</label></p>
        <p><select name="kode_penyakit" id="kode_penyakit" style="width:70%;">
                <option value="">---Pilih Kode penyakit---</option>
                <?php
                $sql   = "SELECT * FROM penyakit ORDER BY kode_penyakit";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                    echo "<option value='" . $row['kode_penyakit'] . "'>" . $row['kode_penyakit'] . "</option>";
                }
                ?>
            </select></p>
        <p><label>Nama Penyakit</label></p>
        <p><select name="nm_penyakit" id="nm_penyakit" style="width:70%;">
                <option value="">---Pilih Nama Penyakit---</option>
                <?php
                $sql   = "SELECT * FROM penyakit ORDER BY kode_penyakit";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                    echo "<option value='" . $row['nm_penyakit'] . "'>" . $row['nm_penyakit'] . "</option>";
                }
                ?>
            </select></p>

        <p><label>Penanganan</label></p>
        <p><input type="textarea" name="penanganan" id="penanganan" placeholder="Isi Penanganan" required minlength="5" maxlength="2000" style="width:70%; height:10%;"></p>

        <p>
            <input type="submit" value="Simpan" name="simpan" style="background:#438eb9;padding:10px;color:#fff;border:0px;">
            <input type="reset" value="Batal" name="batal" style="background:#C3250A;padding:10px;color:#fff;border:0px;">
            <a href="data-penanganan.php" value="kembali" name="kembali" style="background:#C3250A;padding:10px;color:#fff;border:5px;">Kembali</a>
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

</html>