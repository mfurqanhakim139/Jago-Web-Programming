<?php
// BAB 7.3: Script koneksi.php (MySQLi)
// Sesuaikan dengan XAMPP/Laragon Anda.
$host = "localhost";
$user = "root";
$pass = "";
$db   = "belajar_web";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
