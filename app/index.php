<!DOCTYPE html>
<html lang="en">

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

            <li class="transaksiItem">
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
        <div class=" text">Dashboard</div>

        <!-- feature search -->
        <!-- <div class="search-container">
            <input type="text" id="search-input" placeholder="Cari..." />
            <ul id="search-results"></ul>
        </div> -->

        <div class="cards">
            <?php
            // Sisipkan hasil dari skrip PHP eksternal
            include("proses_jumlah.php");
            ?>

            <div class="card">
                <div class="card-image">
                    <p class="total">
                        <?php echo $jumlah; ?>
                        <!-- Menampilkan jumlah total buku di dalam card-image -->
                    </p>
                </div>
                <p class=" card-title">Total Buku</p>
            </div>
            <div class="card">
                <div class="card-image">
                    <p class="total">
                        <?php echo $pinjam; ?>
                        <!-- Menampilkan jumlah total buku di dalam card-image -->
                    </p>
                </div>
                <p class="card-title">Peminjam</p>
                <p class="card-data">
            </div>
            <div class="card">
                <div class="card-image">
                    <p class="total">
                        <?php echo $status; ?>
                        <!-- Menampilkan jumlah total buku di dalam card-image -->
                    </p>
                </div>
                <p class="card-title">Pengembalian</p>
                <p class="card-data">
            </div>
            <div class="card">
                <div class="card-image">
                    <p class="total">
                        <?php echo $kunjungan; ?>
                        <!-- Menampilkan jumlah total buku di dalam card-image -->
                    </p>
                </div>
                <p class=" card-title">Kunjungan</p>
            </div>

        </div>
        <br>
        <section class="home-section">
            <div class="data-content">
                <form action="proses_kunjungan.php" method="post" autocomplete="off">
                    <div class="div-kiri">
                        <br /><br />
                        <label for="rak">Nama</label>
                        <input type="text" id="nama" name="nama" required />
                        <br /><br />
                        <label for="judul">Judul Buku:</label>
                        <input type="text" id="judul" name="Judul" required />
                        <br /><br />
                        <label for="jumlah">Kelas</label>
                        <select id="kelas" name="kelas" required>
                            <option value="">Pilih Kelas</option>
                            <option value="-">-</option>
                            <option value="kelas X">Kelas X</option>
                            <option value="kelas XI">Kelas XI</option>
                            <option value="kelas XII">Kelas XII</option>
                        </select>
                        <br /><br />
                        <label for="pinjam">Tanggal Kunjungan</label>
                        <input type="date" id="jumlah" name="tgl_pinjam" required />
                        <br /><br />
                        <label for="jumlah">Keterangan</label>
                        <select id="staff_type" name="staff_type" required>
                            <option value="">Pilih Keterangan</option>
                            <option value="guru">Guru</option>
                            <option value="staff">Staff</option>
                            <option value="siswa">Siswa</option>
                            <option value="umum">Umum</option>
                        </select>
                        <br /><br />
                        <input type="submit" value="Submit" />
                </form>
            </div>
        </section>
        <!-- end content -->
        <script src="../assets/script/index.js" async defer></script>
</body>

</html>