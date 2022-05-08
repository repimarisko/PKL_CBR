<?php


 function registrasi($data){
    include "../koneksi.php";

    $username = strtolower(stripslashes($data["username"]));
    $email = ($data["email"]);
    $password = mysqli_real_escape_string($koneksi,$data["password"]);
    $password= password_hash($password, PASSWORD_DEFAULT);
    
    

    $result = mysqli_query($koneksi, "SELECT username FROM admin WHERE username='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username sudah digunakan!')</script>";
        return false;
    }
   
    mysqli_query($koneksi, "INSERT INTO admin VALUES('','$username','$email','$password')");
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    include "../koneksi.php";
    mysqli_query($koneksi, "DELETE FROM penanganan WHERE id='$id'");

    return mysqli_affected_rows($koneksi);
}

function hapuspenyakit($kode_penyakit)
{
    include "../koneksi.php";
    mysqli_query($koneksi, "DELETE FROM penyakit WHERE kode_penyakit='$kode_penyakit'");

    return mysqli_affected_rows($koneksi);
}
function hapuspengguna($id)
{
    include "../koneksi.php";
    mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");

    return mysqli_affected_rows($koneksi);
}


function filter_data($data)
{
    $filter = stripslashes(strip_tags(htmlentities(htmlspecialchars($data, ENT_QUOTES))));
    return $filter;
}

function query($query)
{
    include "../koneksi.php";
    $result = mysqli_query($koneksi, $query);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function ubah($data)
{
    include "../koneksi.php";
    $kode_penyakit = htmlspecialchars($data["kode_penyakit"]);
    $nm_penyakit = htmlspecialchars($data["nm_penyakit"]);
    $penyebab = htmlspecialchars($data["penyebab"]);
    $solusi = htmlspecialchars($data["solusi"]);

    mysqli_query($koneksi, "UPDATE penyakit SET  nm_penyakit='$nm_penyakit', penyebab='$penyebab', solusi='$solusi' WHERE kode_penyakit='$kode_penyakit'");
    return mysqli_affected_rows($koneksi);
}
?>