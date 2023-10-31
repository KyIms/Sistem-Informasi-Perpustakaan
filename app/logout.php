<?php
// Mulai atau lanjutkan sesi
session_start();

// Hapus semua data sesi
session_unset();

// Hentikan sesi
session_destroy();

// Arahkan pengguna ke halaman login
header("Location: login.php");
?>