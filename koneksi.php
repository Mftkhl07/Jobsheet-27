<?php

$server = "localhost";  
$user =  "root";
$password = "";
$database = "db_siswaa";
$con = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_error()) {
    echo "Gagal terhubung mysqli: " . mysqli_connect_error();
}