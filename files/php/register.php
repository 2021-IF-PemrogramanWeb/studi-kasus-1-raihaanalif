<?php

include ('config.php');

$name = $_POST['name'];
$email= $_POST['email'];
$password = $_POST['password'];

$after_hash = md5($password);

$query = $connect->query("insert into account (id_user, nama, email, passwords) values (nextval('id_user'::regclass), 
    '$name', '$email', '$after_hash')");
if(!query){
    header("location:../regis-page.php?pesan=gagal");
}else{
    header("location:../index.php?pesan=register");
}
