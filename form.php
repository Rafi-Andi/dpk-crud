<?php include("./config/koneksi.php"); ?>

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
    <title>Tambah Barang</title>
</head>

<body>
    <div class="container-dashboard">
        <header class="header-dashboard">
            <button class="menu-toggle" id="menuToggle">
                <i class="fa-solid fa-bars"></i>
            </button>
            <i class="fa-solid fa-truck"></i>
            <h2>MANAJEMEN BARANG</h2>
        </header>
        <div class="overlay" id="overlay"></div>
        <div class="container">
            <nav class="nav-dashboard" id="navSidebar">
                <ul>
                    <li><a href="index.php" class="nav"><i class="fa-solid fa-box"></i> Data Barang</a></li>
                    <li><a href="" class="nav active"><i class="fa-solid fa-cart-plus"></i> Tambah Barang</a></li>
                </ul>
            </nav>

            <div class="isi-section">
                <form action="tambah-barang.php" method="POST" class="form">
                    <h2>Form Barang</h2>
                    <div class="container-form">
                        <div class="container-input">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" required>
                        </div>
                        <div class="container-input">
                            <label for="kode_barang">Kategori barang</label>
                            <select name="kode_barang" id="kode_barang" required>
                                <option value="" disabled selected>Pilih kategori</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Perabotan">Perabotan</option>
                                <option value="Alat Tulis">Alat Tulis</option>
                            </select>
                        </div>
                        <div class="container-input">
                            <label for="jumlah_barang">Jumlah Barang</label>
                            <input type="number" name="jumlah_barang" id="jumlah_barang" required min="1">
                        </div>
                        <div class="container-input">
                            <label>Type Barang</label>
                            <br>
                            <div class="container-input radio">
                                <div>
                                    <input type="radio" value="Barang Baru" name="type_barang" id="barang_baru" required>
                                    <label for="barang_baru">Barang baru</label>
                                </div>
                                <div>
                                    <input type="radio" value="Barang Bekas" name="type_barang" id="barang_bekas">
                                    <label for="barang_bekas">Barang bekas</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button-submit">
                        <input type="submit" name="tambah" value="Tambah" id="submit_button">
                    </div>

                    <?php if(isset($_GET['status'])): ?>
                        <p style="text-align: center; margin-top: 15px; color: <?php echo ($_GET['status'] == 'sukses') ? 'green' : 'red'; ?>">
                            <?php
                                if($_GET['status'] == 'sukses'){
                                    echo "Pendaftaran barang baru berhasil!";
                                } else {
                                    echo "Pendaftaran gagal!";
                                }
                            ?>
                        </p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navSidebar = document.getElementById('navSidebar');
        const overlay = document.getElementById('overlay');

        menuToggle.addEventListener('click', function() {
            navSidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        });

        overlay.addEventListener('click', function() {
            navSidebar.classList.remove('active');
            overlay.classList.remove('active');
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                navSidebar.classList.remove('active');
                overlay.classList.remove('active');
            }
        });
    </script>
</body>
</html>