<?php 
include("./config/koneksi.php"); 
$sql = "SELECT * FROM barang";
$query = $conn->query($sql);
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
    rel="stylesheet"
    />

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>Manajemen Barang</title>
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
                    <li><a href="" class="nav active"><i class="fa-solid fa-box"></i> Data Barang</a></li>
                    <li><a href="form.php" class="nav"><i class="fa-solid fa-cart-plus"></i> Tambah Barang</a></li>
                </ul>
            </nav>

            <div class="isi-section">
                <div class="container-table">
                    <?php if($query && $query->num_rows > 0) :?>
                        <table class="complaint-table">
                            <thead>
                                <tr class="table-header">
                                    <th>Kategori Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Type Barang</th>
                                    <th>Jumlah Barang</th>
                                    <th>Tanggal</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = $query->fetch_assoc()) :?>
                                    <tr>
                                        <td class="table-cell"><?= $row['kode_barang'];?> </td>
                                        <td class="table-cell"><?= $row['nama_barang'];?></td>
                                        <td class="table-cell"><?= $row['type_barang'];?></td>
                                        <td class="table-cell"><?= $row['jumlah_barang'];?></td>
                                        <td class="table-cell"><?= $row['tanggal'];?></td>
                                        <td class="table-cell">
                                            <div class="action-container">
                                                <a href="edit.php?id=<?php echo $row['id']; ?>" id="buttonEdit"
                                                    class="action-button edit-button"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="hapus.php?id=<?php echo $row['id']; ?>" id="buttonDelete"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"
                                                    class="action-button delete-button"><i class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile;?>
                            </tbody>
                        </table>
                    <?php else : ?>
                        <p>Belum ada data</p>
                    <?php endif ?>
                </div>
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