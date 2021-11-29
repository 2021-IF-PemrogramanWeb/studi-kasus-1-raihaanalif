<?php

include ('config.php');

$nama = $_POST['name'];
$email= $_POST['email'];
$password = $_POST['password'];

$after_hash = md5($password);

$query = $connect->query("insert into account (nama, email, passwords) values ('$nama', '$email', '$after_hash')");
if(!$query){
    header("location:../regis-page.php?pesan=gagal");
}else{
    header("location:../index.php?pesan=register");
}
