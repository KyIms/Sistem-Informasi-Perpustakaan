<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    $host = "localhost"; // Ganti dengan host database Anda
    $username = "root"; // Ganti dengan username database Anda
    $password = ""; // Ganti dengan password database Anda
    $database = "perpus"; // Ganti dengan nama database Anda

    $koneksi = new mysqli($host, $username, $password, $database);

    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    // Mendapatkan data dari formulir
    $kategori = $_POST["Kategori"];
    $rak = $_POST["Rak/Lokasi"];
    $isbn = $_POST["ISBN"];
    $judul = $_POST["Judul"];
    $jumlah = $_POST["Jumlah_Buku"];
    $pengarang = $_POST["nama"];
    $penerbit = $_POST["penerbit"];

    // Menyimpan data ke tabel "buku"
    $sql = "INSERT INTO buku (kategori, rak, isbn, judul, jumlah, pengarang, penerbit) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("ssisiss", $kategori, $rak, $isbn, $judul, $jumlah, $pengarang, $penerbit);

    if ($stmt->execute()) {
        echo "";
        header("Location: data.php");
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
}
?>