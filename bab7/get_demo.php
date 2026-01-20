<?php
// BAB 7.1: Menangkap data dari URL dengan $_GET
$nama = isset($_GET["nama"]) ? $_GET["nama"] : "(kosong)";
$kota = isset($_GET["kota"]) ? $_GET["kota"] : "(kosong)";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo $_GET</title>
  <style>body{font-family:Arial,sans-serif;padding:24px}</style>
</head>
<body>
  <h2>Demo Menangkap Data dengan $_GET</h2>
  <p>Nama: <strong><?= htmlspecialchars($nama); ?></strong></p>
  <p>Kota: <strong><?= htmlspecialchars($kota); ?></strong></p>
  <p><a href="index.php">Kembali</a></p>
</body>
</html>
