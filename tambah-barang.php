<?php 
include("./config/koneksi.php");

if(isset($_POST['tambah'])){
    $nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $type_barang = $_POST['type_barang'];

    $sql = "INSERT INTO barang (nama_barang, kode_barang, jumlah_barang, type_barang) VALUE ('$nama_barang', '$kode_barang', '$jumlah_barang', '$type_barang')";

    $query = $conn ->query($sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

}else {
    die("Akses dilarang...");
}



?>