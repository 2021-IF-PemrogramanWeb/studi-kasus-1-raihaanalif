<?php
include ('config.php');

$email = $_POST["email"];
$pass = $_POST["password"];

$after_hash = md5($pass);

$query = $connect->query("select * from account where email = '$email' and passwords = '$after_hash'");

$check = pg_num_rows($query);
if($check > 0){
    session_start();
    $_SESSION['email'] = $email;
    
    header('location:../table-page.php?pesan=berhasil');
    
}
else{
    header("location:../index.php?pesan=gagal");
}

?>