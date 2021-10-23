<?php

$email = $_POST["email"];
$pass = $_POST["password"];

if($email == "raihanalifianto@gmail.com" && $pass == "test1234"){
    echo "Selamat Datang Alif";
}
else{
    header("location:../pages/login-page.php?pesan=gagal");
}

?>