<?php
require 'function.php';
$id = $_GET['kode_penyakit'];


if(hapuspenyakit($id)){
    echo "<script>alert('Data berhasil dihapus')
    document.location.href='data-penyakit.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}
