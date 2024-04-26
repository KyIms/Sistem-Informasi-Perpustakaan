<?php
// Lakukan koneksi ke database di sini
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$judul = mysqli_real_escape_string($conn, $_POST['Judul']);
$kelas = mysqli_real_escape_string($conn, $_POST['kelas']);
$tgl_kunjungan = mysqli_real_escape_string($conn, $_POST['tgl_pinjam']);
$keterangan = mysqli_real_escape_string($conn, $_POST['staff_type']);

// Periksa apakah judul buku ada di tabel buku
$check_query = "SELECT * FROM buku WHERE judul = '$judul'";
$result = $conn->query($check_query);

if ($result->num_rows > 0) {
    // Jika judul buku ditemukan, masukkan data ke dalam tabel kunjungan
    $sql = "INSERT INTO kunjungan (nama, judul_buku, kelas, tanggal_kunjungan, keterangan)
            VALUES ('$nama', '$judul', '$kelas', '$tgl_kunjungan', '$keterangan')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
        // Jangan menggunakan echo setelah melakukan redirect, itu akan menghasilkan error
        echo '<script>alert("Data berhasil disimpan!"); window.location.href = "index.php";</script>';
        exit(); // Pastikan untuk keluar setelah redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Jika judul buku tidak ditemukan, tampilkan pesan notifikasi popup
    echo '<script>alert("Buku tidak ditemukan dalam database."); 
    window.location.href = "index.php";</script>';
}

// Tutup koneksi
$conn->close();
?>