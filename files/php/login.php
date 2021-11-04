<?php

$email = $_POST["email"];
$pass = $_POST["password"];

if($email == "raihanalifianto@gmail.com" && $pass == "test1234"){
    header('location:../table-page.php?pesan=berhasil');
}
else{
    header("location:../index.php?pesan=gagal");
}

?>