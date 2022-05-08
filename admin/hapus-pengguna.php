<?php
require 'function.php';
$id = $_GET['id'];


if(hapuspengguna($id)){
    echo "<script>alert('Data berhasil dihapus')
    document.location.href='data-pengguna.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}
