<?php
// Hubungkan ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "perpus";

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi database
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $judul = $_POST["Judul"];
    $tgl_pinjam = $_POST["tgl_pinjam"];
    $tgl_balik = $_POST["tgl_balik"];
    $jumlah_pinjam = $_POST["jumlah"];

    // Periksa apakah buku tersedia di tabel buku
    $check_query = "SELECT * FROM buku WHERE Judul = '$judul'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // Buku tersedia, lakukan penambahan ke tabel pinjam dan pengurangan stok di tabel buku
        $insert_query = "INSERT INTO pinjaman (id, nama, kelas, judul, tanggal_pinjam, tanggal_kembali, jumlah) VALUES ('$kategori', '$nama', '$kelas', '$judul', '$tgl_pinjam', '$tgl_balik', $jumlah_pinjam)";

        if ($conn->query($insert_query) === TRUE) {
            // Update jumlah buku di tabel buku
            $update_query = "UPDATE buku SET Jumlah = Jumlah - $jumlah_pinjam WHERE Judul = '$judul'";
            $conn->query($update_query);

            echo '<script>alert("Data Berhasil Disimpan"); 
    window.location.href = "peminjaman.php";</script>';
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    } else {
        // Jika judul buku tidak ditemukan, tampilkan pesan notifikasi popup
    echo '<script>alert("Buku tidak ditemukan dalam database."); 
    window.location.href = "peminjaman.php";</script>';
    }

    // Tutup koneksi ke database
    $conn->close();
}
?>