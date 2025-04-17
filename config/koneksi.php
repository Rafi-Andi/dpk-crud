<?php

$DB_HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'inventaris_barang';

$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if($conn -> connect_error){
    die("koneksi gagal :" . $conn->connect_error);
}

echo("koneksi berhasil");
?>