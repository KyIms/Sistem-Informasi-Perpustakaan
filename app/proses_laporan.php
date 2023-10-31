<?php
// Koneksi ke database (gunakan informasi koneksi yang sesuai)
$koneksi = mysqli_connect("localhost", "root", "", "perpus");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel "pinjaman"
$query = "SELECT * FROM pinjaman";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}

// Mulai menampilkan data dalam format tabel HTML

$no = 1; // Variabel nomor urut
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['judul'] . "</td>";
    echo "<td>" . $row['tanggal_pinjam'] . "</td>";
    echo "<td>" . $row['tanggal_kembali'] . "</td>";
    echo "<td>" . $row['jumlah'] . "</td>";
    
    if ($row['status'] == 1) {
        echo "<td>Sudah Dikembalikan</td>";
    } else {
        echo "<td>Belum Dikembalikan</td>";
    }

    echo "</tr>";

    $no++; // Tambahkan 1 ke nomor urut
}

echo '</tbody>';
echo '</table>';

// Tutup koneksi ke database
mysqli_close($koneksi);
?>