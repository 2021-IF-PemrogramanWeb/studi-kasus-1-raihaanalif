<?php
$host = "ec2-3-218-92-146.compute-1.amazonaws.com";
$user = "ebcvshzketwbsr";
$password = "7b94dc82d5af9da75816084a84245448b6b74231dba72bb176a1cbe7ed0726a8";
$dbname = "d96l3e2fpq82i7";
$port = "5432";

try{
    $dsn = "pgsql:host=" . $host . ";port= " . $port . ";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";

    $connect = new PDO($dsn, $user, $password);
    $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo 'Connection Failed: ' . $e->getMessage();
}
?>