<?php
$server = "localhost";
$username = "root";
$password = "";
$database_name = "register";

$koneksi = mysqli_connect($server, $username, $password, $database_name);

if (!$koneksi) {
    die("Gagal Connect: " . mysqli_connect_error());
}

?>