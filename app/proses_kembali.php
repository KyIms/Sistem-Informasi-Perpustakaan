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
    // if ($row['status'] == 1) {
    //     echo "<td>Sudah Dikembalikan</td>";
    // } else {
    //     echo "<td>Belum Dikembalikan</td>";
    //     // Tambahkan link untuk mengubah status
    //     echo "<td>
    //             <a href='ubah_status.php?id=" . $row['id'] . "&action=ubah'>Ubah Status</a> | 
    //           </td>";
    // }

    if ($row['status'] == 1) {
        echo "<td>Sudah Dikembalikan</td>";
        echo "<td><a href='batalkan.php?id=" . $row['id'] . "&action=ubah'>Batalkan</a></td>";
    } else {
        echo "<td>Belum Dikembalikan</td>";
        echo "<td><a href='ubah_status.php?id=" . $row['id'] . "&action=ubah'>Ubah Status</a></td>";
        echo "<td style='display: none;'><a href='batalkan.php?id=" . $row['id'] . "&action=ubah'>Batalkan</a></td>";
    }


    echo "</tr>";
}

echo '</tbody>';
echo '</table>';
