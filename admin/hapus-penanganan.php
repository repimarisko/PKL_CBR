<?php
require 'function.php';
$id = $_GET['id'];


if(hapus($id)){
    echo "<script>alert('Data berhasil dihapus')
    document.location.href='data-penanganan.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}
?>