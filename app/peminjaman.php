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
        <div class="text">Peminjaman</div>
        <div class="data-content">
            <form action="proses_pinjam.php" method="post" autocomplete="off">
                <div class="div-kiri">
                    <label for="rak">Nama</label>
                    <input type="text" id="nama" name="nama" required />
                    <br /><br />
                    <label for="isbn">Kelas</label>
                    <input type="text" id="ikelas" name="kelas" required />
                    <br /><br />
                    <label for="judul">Judul Buku:</label>
                    <input type="text" id="judul" name="Judul" required />
                    <br /><br />
                </div>
                <div class="div-kanan">

                    <label for="pinjam">Tanggal Pinjam</label>
                    <input type="date" id="jumlah" name="tgl_pinjam" required />
                    <br /><br />
                    <label for="balik">Tanggal Pengembalian</label>
                    <input type="date" id="jumlah" name="tgl_balik" required />
                    <br /><br />
                    <label for="jumlah">Jumlah Pinjam</label>
                    <input type="text" id="jumlah" name="jumlah" required />
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