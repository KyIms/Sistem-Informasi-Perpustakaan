<?php
// Koneksi ke database (sesuaikan dengan informasi koneksi Anda)
$koneksi = mysqli_connect("localhost", "root", "", "perpus");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah parameter id telah dikirimkan melalui URL
if (isset($_GET['id'])) {
    $id_pinjaman = $_GET['id'];

    // Kode untuk mengubah status, misalnya:
    // Update status di tabel "pinjaman" menjadi 1 (sudah dikembalikan)
    $query_update_status = "UPDATE pinjaman SET status = 1 WHERE id = $id_pinjaman";
    $result_update_status = mysqli_query($koneksi, $query_update_status);

    if (!$result_update_status) {
        die("Query error: " . mysqli_error($koneksi));
    }

    // Kode untuk menghitung jumlah buku yang baru dijumlahkan dan mengupdate jumlah buku
    $query_hitung_jumlah_baru = "SELECT judul, jumlah FROM pinjaman WHERE id = $id_pinjaman";
    $result_hitung_jumlah_baru = mysqli_query($koneksi, $query_hitung_jumlah_baru);

    if ($row = mysqli_fetch_assoc($result_hitung_jumlah_baru)) {
        $jumlah_baru = $row['jumlah'];
        
        // Mengupdate jumlah buku dengan menambahkan jumlah buku yang baru dijumlahkan dengan jumlah buku yang sudah ada sebelumnya
        $query_update_buku = "UPDATE buku SET jumlah = jumlah + $jumlah_baru WHERE judul = '" . $row['judul'] . "'";
        $result_update_buku = mysqli_query($koneksi, $query_update_buku);

        if (!$result_update_buku) {
            die("Query error: " . mysqli_error($koneksi));
        }
    }

    // Redirect kembali ke halaman utama setelah berhasil mengubah status
    header("Location: pengembalian.php");
    exit();
} else {
    // Tidak ada parameter id yang dikirimkan, mungkin perlu menangani ini dengan pesan kesalahan atau tindakan lainnya
}
?>
