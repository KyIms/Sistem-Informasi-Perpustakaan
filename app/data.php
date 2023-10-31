<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Perpus</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/style/style.css" />
</head>

<body>
    <!-- sidebar -->
    <div class="sidebar">
        <div class="logo-details">
            <img class="icon" src="../assets/img/book.png" alt="profileImg" />
            <div class="logo_name">Perpus</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>

        <ul class="nav-list">
            <!-- sidebar dashboard -->
            <li>
                <a href="index.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <!-- sidebar data -->
            <li>
                <a href="data.php">
                    <i class="bx bx-book"></i>
                    <span class="links_name">Data</span>
                </a>
                <span class="tooltip">Data</span>
            </li>

            <!-- sidebar Laporan -->
            <li>
                <a href="laporan.php">
                    <i class="bx bxs-report"></i>
                    <span class="links_name">Laporan</span>
                </a>
                <span class="tooltip">Laporan</span>
            </li>

            <!-- sidebar transaksi & submenu -->
            <div class="transaksiLink">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="bx bx-money"></i>
                        <span class="links_name">Transaksi</span>
                        <button class="btn scndry"></button>
                    </a>
                    <span class="tooltip">Transaksi</span>
                    <div class="dropdown-container">
                        <a class="submenu" href="peminjaman.php">Peminjaman</a>
                        <a class="submenu" href="pengembalian.php">Pengembalian</a>
                    </div>
                </li>
            </div>

            <!-- sidebar profil -->
            <li class="profile">
                <div class="profile-details">
                    <div class="name_job">
                        <div class="name">Admin</div>
                        <div class="job">Petugas</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->

    <!-- start content -->
    <section class="home-section">
        <div class="text">Data</div>
        <div class="data-content">
            <form action="proses_data.php" method="post" autocomplete="off">
                <div class="div-kiri">
                    <label for="kategori">Kategori:</label>
                    <input type="text" id="kategori" name="Kategori" required />
                    <br /><br />
                    <label for="rak">Rak/Lokasi:</label>
                    <input type="number" id="rak" name="Rak/Lokasi" required />
                    <br /><br />
                    <label for="isbn">ISBN:</label>
                    <input type="number" id="isbn" name="ISBN" required />
                    <br /><br />
                    <label for="judul">Judul Buku:</label>
                    <input type="text" id="judul" name="Judul" required />
                    <br /><br />
                </div>
                <div class="div-kanan">
                    <label for="jumlah">Jumlah Buku:</label>
                    <input type="number" id="jumlah" name="Jumlah_Buku" required />
                    <br /><br />
                    <label for="pengarang">Nama Pengarang:</label>
                    <input type="text" id="pengarang" name="nama" required />
                    <br /><br />
                    <label for="penerbit">Penerbit:</label>
                    <input type="text" id="penerbit" name="penerbit" required />
                    <br /><br />
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </section>
    <!-- end content -->

    <script src="../assets/script/data.js" async defer></script>
    <script src="../assets/script/index.js" async defer></script>
</body>

</html>