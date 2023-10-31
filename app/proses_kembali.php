<?php
// Koneksi ke database (sesuaikan dengan informasi koneksi Anda)
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

// Menampilkan data dalam format tabel HTML
echo '<table>';
echo '<thead>
        <tr>
            <th>No.</th>
            <th>Nama Peminjam</th>
            <th>Kelas</th>
            <th>Judul Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Jumlah Pinjam</th>
            <th>Aksi</th>
            <th> Ubah Status</th>
        </tr>
    </thead>';
echo '<tbody>';

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['kelas'] . "</td>";
    echo "<td>" . $row['judul'] . "</td>";
    echo "<td>" . $row['tanggal_pinjam'] . "</td>";
    echo "<td>" . $row['tanggal_kembali'] . "</td>";
    echo "<td>" . $row['jumlah'] . "</td>";

    // Periksa apakah data sudah dikembalikan
    if ($row['status'] == 1) {
        echo "<td>Sudah Dikembalikan</td>";
    } else {
        echo "<td>Belum Dikembalikan</td>";
        // Tambahkan link untuk mengubah status
        echo "<td><a href='ubah_status.php?id=" . $row['id'] . "'>Ubah Status</a></td>";
    }

    echo "</tr>";
}

echo '</tbody>';
echo '</table>';

// // Query untuk memindahkan data judul dan jumlah dari tabel pinjaman ke tabel pengembalian
// $query_pindah = "INSERT INTO pengembalian (judul, jumlah) SELECT judul, jumlah FROM pinjaman WHERE status = 1";
// $result_pindah = mysqli_query($koneksi, $query_pindah);

// if (!$result_pindah) {
//     die("Query error: " . mysqli_error($koneksi));
// }

// // Menghitung jumlah buku yang baru dijumlahkan
// $jumlah_baru = 0;
// $query_pengembalian = "SELECT judul, jumlah FROM pengembalian";
// $result_pengembalian = mysqli_query($koneksi, $query_pengembalian);

// while ($row = mysqli_fetch_assoc($result_pengembalian)) {
//     $jumlah_baru += $row['jumlah'];
// }

// // Mengupdate jumlah buku dengan menambahkan jumlah buku yang baru dijumlahkan dengan jumlah buku yang sudah ada sebelumnya
// $query_update_buku = "UPDATE buku SET jumlah = jumlah + $jumlah_baru WHERE judul IN (SELECT judul FROM pinjaman)";
// $result_update_buku = mysqli_query($koneksi, $query_update_buku);

// if (!$result_update_buku) {
//     die("Query error: " . mysqli_error($koneksi));
// }

// // Menghapus data dari tabel pengembalian
// $query_hapus_pengembalian = "DELETE FROM pengembalian";
// $result_hapus_pengembalian = mysqli_query($koneksi, $query_hapus_pengembalian);

// if (!$result_hapus_pengembalian) {
//     die("Query error: " . mysqli_error($koneksi));
// }
