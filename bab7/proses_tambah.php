<?php
// BAB 7.1: Menangkap data form dengan $_POST
require_once "koneksi.php";

// Ambil data POST (gunakan name="" dari form)
$nama = isset($_POST["nama"]) ? trim($_POST["nama"]) : "";
$email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
$kota = isset($_POST["kota"]) ? trim($_POST["kota"]) : null;
$tanggal_lahir = isset($_POST["tanggal_lahir"]) ? trim($_POST["tanggal_lahir"]) : null;

if ($nama === "" || $email === "") {
    die("Nama dan Email wajib diisi. <a href='form_tambah.php'>Kembali</a>");
}

// Hindari SQL Injection dengan prepared statement
$stmt = mysqli_prepare($koneksi, "INSERT INTO siswa (nama, email, kota, tanggal_lahir) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssss", $nama, $email, $kota, $tanggal_lahir);

if (mysqli_stmt_execute($stmt)) {
    header("Location: list.php?msg=sukses");
    exit;
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
