<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Jersey+15&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
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
            <nav class="nav-dashboard">
                <ul>
                    <li><a href="index.php" class="nav"><i class="fa-solid fa-box"></i> Data Barang</a></li>
                    <li><a href="" class="nav active"><i class="fa-solid fa-cart-plus"></i> Tambah Barang</a></li>
                </ul>
            </nav>

            <div class="isi-section">
                <form action="" class="form">
                    <h2>Form Barang</h2>
                    <div class="container-form">
                        <div class="container-input">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang">
                        </div>
                        <div class="container-input">
                            <label for="kode_barag">Kategori barang</label>
                            <select name="kode_barang" id="kode_barang">
                                <option value="ELK-">Elektronik</option>
                                <option value="PRB-">Perabotan</option>
                                <option value="ATK-">Alat Tulis</option>
                            </select>

                        </div>
                        <div class="container-input">
                            <label for="jumlah_barang">Jumlah Barang</label>
                            <input type="number" name="jumlah_barang" id="jumlah_barang">
                        </div>
                        <div class="container-input">
                            <label>Type Barang</label>
                            <br>
                            <div class="container-input radio">
                                <div>
                                    <label>Barang baru</label>
                                    <input type="radio" value="barang_baru" name="type_barang" id="">
                                </div>
                                <div>
                                    <label>Barang bekas</label>
                                    <input type="radio" value="barang_bekas" name="type_barang" id="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button-submit">
                        <input type="submit" name="Tambah" value="Tambah" id="">
                    </div>
                </form>
            </div>
        </div>
</body>

</html>