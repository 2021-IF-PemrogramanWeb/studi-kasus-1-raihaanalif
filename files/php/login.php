<?php
include ('config.php');

$email = $_POST["email"];
$pass = $_POST["password"];

$after_hash = md5($pass);

if(!password_verify($pass, $after_hash)) echo "invalid pass";
$query = pg_query($connect, "select * from account where email = '$email' and passwords = '$after_hash'");

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