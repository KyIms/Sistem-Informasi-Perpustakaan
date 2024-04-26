<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Perpus</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/style/laporan.css" />
    <link rel="stylesheet" href="../assets/style/bootstrap.min.css" />
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="logo-details">
            <img class="icon" src="../assets/img/book.png" alt="profileImg" />
            <div class="logo_name">Perpus</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>


        <ul class="nav flex-column">
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

            <li>
                <a href="buku.php">
                    <i class="bx bx-book"></i>
                    <span class="links_name">Daftar Buku</span>
                </a>
                <span class="tooltip">Daftar Buku</span>
            </li>

            <!-- sidebar Laporan -->
            <div class="transaksiLink">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="bx bxs-report"></i>
                        <span class="links_name">Laporan</span>
                    </a>
                    <span class="tooltip">Laporan</span>
                    <div class="dropdown-container">
                        <a class="submenu" href="laporan.php">Pengembalian</a>
                        <a class="submenu" href="laporan_kunjungan.php">Kunjungan</a>
                    </div>
                </li>
            </div>

            <!-- sidebar transaksi & submenu -->

            <li>
                <a href="peminjaman.php">
                    <i class="bx bx-money"></i>
                    <span class="links_name">Transaksi</span>
                </a>
                <span class="tooltip">Transaksi</span>
            </li>



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
    </div>
    <!-- end sidebar -->

    <!-- start content -->
    <section class="home-section">
        <div class="text">Laporan Kunjungan</div>

        <div class="row">
            <div class="col-12 col-xl-12 mb-4 mblg-0">

                <div class="card">
                    <h5 class="Card-header list-group-item list-group-item-secondary"></h5>
                    <div class="card-body">
                        <div>
                            <button id="btnPrint">Cetak Laporan</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="laporanTable" autocomplete="off">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Judul Buku</th>
                                        <th>Tanggal Kunjungan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Sisipkan hasil dari skrip PHP eksternal
                                    include("proses_laporanKunjungan.php");
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end content -->

    <script src="../assets/script/index.js" async defer></script>
</body>

</html>