 <!-- <?php
// Langkah 1: Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "perpus");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Langkah 2: Mengambil jumlah buku dari tabel "buku"
$query = "SELECT SUM(jumlah) as jumlah FROM buku";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}
$row = mysqli_fetch_assoc($result);

// Simpan jumlah buku ke dalam variabel $jumlah
$jumlah = $row['jumlah'];

// Langkah 3: Menampilkan jumlah buku dalam elemen HTML


// ======================
// Peminjalan
// ======================
// Langkah 2: Mengambil jumlah buku dari tabel "buku"
$query = "SELECT id FROM pinjaman ORDER BY id DESC LIMIT 1";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}

$row = mysqli_fetch_assoc($result);

// Simpan ID terakhir ke dalam variabel $pinjam
$pinjam = $row['id'];

// Langkah 3: Menampilkan jumlah buku dalam elemen HTML


// ======================
// Pengembalian
// ======================
// Langkah 2: Mengambil jumlah buku dari tabel "buku"
$query = "SELECT SUM(status) as status FROM pinjaman";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}
$row = mysqli_fetch_assoc($result);

// Simpan jumlah buku ke dalam variabel $jumlah
$status = $row['status'];

// Langkah 3: Menampilkan jumlah buku dalam elemen HTML
?> -->