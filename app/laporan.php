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
    </div>
    <!-- end sidebar -->

    <!-- start content -->
    <section class="home-section">
        <div class="text">Laporan</div>

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
                                        <th>Judul Buku</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Sisipkan hasil dari skrip PHP eksternal
                                    include("proses_laporan.php");
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