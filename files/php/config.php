<?php
$host = "ec2-3-218-92-146.compute-1.amazonaws.com";
$user = "ebcvshzketwbsr";
$password = "7b94dc82d5af9da75816084a84245448b6b74231dba72bb176a1cbe7ed0726a8";
$dbname = "d96l3e2fpq82i7";
$port = "5432";

$dsn = "pgsql:"
. "host=" . $host 
. ";dbname=" . $dbname 
. ";user=" . $user 
. ";port=5432;"
. "sslmode=require;"
. "password=" . $password ;
$connect = new PDO($dsn);
?>