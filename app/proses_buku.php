<?php
// Koneksi ke database (gunakan informasi koneksi yang sesuai)
$koneksi = mysqli_connect("localhost", "root", "", "perpus");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel "pinjaman"
$query = "SELECT * FROM buku";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}

// Mulai menampilkan data dalam format tabel HTML

$no = 1; // Variabel nomor urut
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['judul'] . "</td>";
    echo "<td>" . $row['kategori'] . "</td>";
    echo "<td>" . $row['pengarang'] . "</td>";
    echo "<td>" . $row['penerbit'] . "</td>";
    echo "<td>" . $row['rak'] . "</td>";
    echo "<td>" . $row['isbn'] . "</td>";
    echo "<td>" . $row['jumlah'] . "</td>";
    echo "</tr>";

    $no++; // Tambahkan 1 ke nomor urut
}

echo '</tbody>';
echo '</table>';

// Tutup koneksi ke database
mysqli_close($koneksi);
?>