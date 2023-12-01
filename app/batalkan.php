<?php
$koneksi = mysqli_connect("localhost", "root", "", "perpus");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id_pinjaman = $_GET['id'];

    // Mengembalikan status pinjaman menjadi 0 (belum dikembalikan)
    $query_update_status = "UPDATE pinjaman SET status = 0 WHERE id = $id_pinjaman";
    $result_update_status = mysqli_query($koneksi, $query_update_status);

    if (!$result_update_status) {
        die("Query error: " . mysqli_error($koneksi));
    }

    // Mengambil jumlah buku yang telah dikembalikan
    $query_hitung_jumlah_baru = "SELECT judul, jumlah FROM pinjaman WHERE id = $id_pinjaman";
    $result_hitung_jumlah_baru = mysqli_query($koneksi, $query_hitung_jumlah_baru);

    if ($row = mysqli_fetch_assoc($result_hitung_jumlah_baru)) {
        $jumlah_dikembalikan = $row['jumlah'];

        // Mengurangi jumlah buku yang telah dikembalikan dari stok buku yang tersedia
        $query_update_buku = "UPDATE buku SET jumlah = jumlah - $jumlah_dikembalikan WHERE judul = '" . $row['judul'] . "'";
        $result_update_buku = mysqli_query($koneksi, $query_update_buku);

        if (!$result_update_buku) {
            die("Query error: " . mysqli_error($koneksi));
        }
    }

    header("Location: pengembalian.php");
    exit();
} else {
    // Tindakan jika tidak ada parameter id yang dikirimkan
}
?>