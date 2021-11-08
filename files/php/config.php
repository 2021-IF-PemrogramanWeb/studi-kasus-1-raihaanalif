<?php
$host = "ec2-3-218-92-146.compute-1.amazonaws.com";
$user = "ebcvshzketwbsr";
$password = "7b94dc82d5af9da75816084a84245448b6b74231dba72bb176a1cbe7ed0726a8";
$dbname = "d96l3e2fpq82i7";
$port = "5432";

function pg_connection_string_from_database_url() {
    extract(parse_url($_ENV["postgres://ebcvshzketwbsr:7b94dc82d5af9da75816084a84245448b6b74231dba72bb176a1cbe7ed0726a8@ec2-3-218-92-146.compute-1.amazonaws.com:5432/d96l3e2fpq82i7"]));
    return "user=$user password=$pass host=$host dbname=$dbname port=$port"; # <- you may want to add sslmode=require there too
  }
  
$connect = pg_connect(pg_connection_string_from_database_url());
?>