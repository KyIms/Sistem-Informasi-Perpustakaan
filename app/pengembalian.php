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
        <!-- feature search -->
        <ul class="nav-list">

            <!-- sidebar Laporan -->
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

            <li>
                <a href="buku.php">
                    <i class="bx bx-book"></i>
                    <span class="links_name">Daftar Buku</span>
                </a>
                <span class="tooltip">Daftar Buku</span>
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
                <a href="login.php" id="log_out">
                    <!-- Menggunakan tag <a> agar dapat diklik -->
                    <i class="bx bx-log-out"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->
    <!-- start content -->
    <section class="home-section">
        <div class="text">Data Pengembalian</div>
        <div class="table-container">
            <table autocomplete="off">

                <thead>
                    <!-- <tr>
                        <th>No.</th>
                        <th>Nama Peminjam</th>
                        <th>Kelas</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Jumlah Pinjam</th>
                        <th>Aksi</th>
                    </tr> -->
                </thead>
                <tbody>

                    <?php
                    // Sisipkan hasil dari skrip PHP eksternal
                    include("proses_kembali.php");
                    ?>

                </tbody>
            </table>
        </div>
    </section>
    <script src="../assets/script/kembali.js" async defer></script>
    <script src="../assets/script/index.js" async defer></script>
</body>

</html>