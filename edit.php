<?php 
include("./config/koneksi.php"); 

if(!isset($_GET['id'])){
    header('location: index.php');
}

$id = $_GET['id'];

$query = "SELECT * FROM barang WHERE id='$id'";
$result = $conn -> query($query);
$barang = $result -> fetch_assoc();

if($result -> num_rows < 0 ){
    die('data tidak di temukan..');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Jersey+15&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="container-dashboard">
        <header class="header-dashboard">
            <i class="fa-solid fa-truck"></i>    
            <h2>MANAJEMEN BARANG</h2>
        </header>
        <div class="container">
            <div class="isi-section">
                <form action="proses-edit.php" method="POST" class="form">
                    <h2>Form Barang</h2>
                    <div class="container-form">
                        <div class="container-input">
                            <input type="text" name="id" value="<?php echo $barang['id'] ?>" hidden>
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" value="<?php echo $barang['nama_barang'] ?>">
                        </div>
                        <div class="container-input">
                            <label for="kode_barag">Kategori barang</label>
                            <select name="kode_barang" id="kode_barang">
                                <option value="Elektronik">Elektronik</option>
                                <option value="Perabotan">Perabotan</option>
                                <option value="Alat Tulis">Alat Tulis</option>
                            </select>

                        </div>
                        <div class="container-input">
                            <label for="jumlah_barang">Jumlah Barang</label>
                            <input type="number" value="<?= $barang['jumlah_barang'] ?>" name="jumlah_barang" id="jumlah_barang">
                        </div>
                        <div class="container-input">
                            <label>Type Barang</label>
                            <br>
                            <div class="container-input radio">
                                <div>
                                    <?php $type_barang = $barang['type_barang'] ?>
                                    <label>Barang baru</label>
                                    <input type="radio" <?php echo ($type_barang == 'Barang Baru') ? "checked" : "" ?> value="Barang Baru" name="type_barang" id="">
                                </div>
                                <div>
                                    <label>Barang bekas</label>
                                    <input type="radio" <?php echo ($type_barang == 'Barang Bekas') ? "checked" : "" ?> value="Barang Bekas" name="type_barang" id="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button-submit">
                        <input type="submit" name="simpan" value="Simpan" id="">
                    </div>
                </form>
            </div>
        </div>
</body>

</html>