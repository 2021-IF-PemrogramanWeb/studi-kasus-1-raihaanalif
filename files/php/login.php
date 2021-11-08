<?php
session_start();
$email = $_POST["email"];
$pass = $_POST["password"];

if($email == "raihanalifianto@gmail.com" && $pass == "test1234"){
    $_SESSION['email'] = $email;
    setcookie('email', $email, time() + 30);
    header('location:../table-page.php?pesan=berhasil');
}
else{
    header("location:../index.php?pesan=gagal");
}

?>