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
	<div style="overflow-x:auto;">
	    <table width="95%" border="0" align="left" cellpadding="2" cellspacing="1" bgcolor="#22B5DD">
	        <tr bgcolor="#9d78be">
	            <td colspan="4"><b>Dafatar Penyakit Manggis dalam Sistem</b></td>
	        </tr>
	        <tr bgcolor="#DBEAF5">
	            <td width="23" bgcolor="#9d78be"><b>No</b></td>
	            <td width="244" bgcolor="#9d78be"><strong>Deskripsi Penyakit</strong></td>
	        </tr>
	        <?php
            include "koneksi.php";
            $sql = "SELECT * FROM penyakit ORDER BY kode_penyakit";
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
	                        <div align="left"><?php echo "<h3><em>$data[nama_penyakit]</em></h3>"; ?></div>
	                        <ul>
	                            <li><label>Definisi Penyakit :</label>
	                                <p><?php echo "$data[definisi]"; ?></p>
	                            </li>
	                            <li><label>Solusi :</label>
	                                <p><?php echo "$data[solusi]"; ?></p>
	                    </div>
	                    </li>
	                    </ul>

	                </td>
	            </tr>
	        <?php
            }
            ?>
	    </table>
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
	</body>

	</html>