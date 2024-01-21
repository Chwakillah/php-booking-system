<?php

$hostname = "localhost";
$database_name = "cuyresto";
$username = "root";
$password = "";

$db = mysqli_connect($hostname, $database_name,$username, $password);

if($db->connect_error){
    echo "Koneksi database eror";
    die();
} 

echo "koneksi berhasil";