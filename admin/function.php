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
?>