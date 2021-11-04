<?php

$email = $_POST["email"];
$pass = $_POST["password"];

if($email == "raihanalifianto@gmail.com" && $pass == "test1234"){
    header('location:../pages/table-page.php?pesan=berhasil');
}
else{
    header("location:../pages/index.php?pesan=gagal");
}

?>