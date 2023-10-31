<?php
// Hubungkan ke database
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "perpus"; // Ganti dengan nama database Anda

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa username dan password
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // Jika login sukses, alihkan ke index.html
    header("Location: index.php");
} else {
    // Jika login gagal, kembalikan ke halaman login
    header("Location: login.php");
}



// Inisialisasi variabel $jumlah dengan nilai awal nol
$jumlah = 0;

// Query untuk mengambil jumlah total buku
// $queryjumlah = "SELECT SUM(jumlah) as total_buku FROM buku";
// $resultTotalBuku = $conn->query($queryjumlah);
// $rowTotalBuku = $resultTotalBuku->fetch_array();
// $jumlah = $rowTotalBuku['total`_buku'];

$stmt = $handler->prepare('SELECT SUM(jumlah) AS total_buku FROM buku');
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$sum = $row['total_buku'];

// Query untuk mengambil jumlah total peminjaman
$queryTotalPeminjaman = "SELECT SUM(jumlah) as total_peminjaman FROM pinjam";
$resultTotalPeminjaman = $conn->query($queryTotalPeminjaman);
$rowTotalPeminjaman = $resultTotalPeminjaman->fetch_assoc();
$totalPeminjaman = $rowTotalPeminjaman['total_peminjaman'];

// Query untuk mengambil data total pengembalian
$queryTotalPengembalian = "SELECT COUNT(*) as total_pengembalian FROM pengembalian";
$resultTotalPengembalian = $conn->query($queryTotalPengembalian);
$rowTotalPengembalian = $resultTotalPengembalian->fetch_assoc();
$totalPengembalian = $rowTotalPengembalian['total_pengembalian'];



$conn->close();
?>