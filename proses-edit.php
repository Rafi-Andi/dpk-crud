<?php

include('./config/koneksi.php');

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $type_barang = $_POST['type_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];

    $query = "UPDATE barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', type_barang='$type_barang', jumlah_barang='$jumlah_barang' WHERE id=$id";
    $result = $conn -> query($query);

    if($result){
        header('location: index.php');
    } else {
        echo 'Gagal memperbarui data';
    }
} else {
    die('akses dilarang');
}


?>