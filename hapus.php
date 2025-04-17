<?php

include('./config/koneksi.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo "berhasil dapat get $id";

    $query = "DELETE FROM barang WHERE id='$id'";
    $result = $conn -> query(($query));

    if($result){
        header('Location: index.php');
    } 
} else {
    die('akses terlarang');
}

?>