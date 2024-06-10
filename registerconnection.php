<?php
require 'koneksi.php'; 

$nama_depan = $_POST["nama_depan"];
$nama_belakang = $_POST["nama_belakang"];
$nomor_telepon = $_POST["nomor_telepon"];
$username = $_POST["username"];
$password = $_POST["password"];
$ulang_password = $_POST["ulang_password"];

$query_sql = "INSERT INTO register (nama_depan, nama_belakang, nomor_telepon, username, password, ulang_password) 
            VALUES ('$nama_depan', '$nama_belakang', '$nomor_telepon', '$username', '$password', '$ulang_password')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: index.html");
    exit();
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>