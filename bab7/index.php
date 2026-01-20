<?php
// BAB 7.1: PHP Native dasar (echo, variabel, komentar, if-else, foreach)
$judul = "BAB 7 - Backend PHP & MySQL (Create & Read)";
$hari  = date("l");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul; ?></title>
  <style>
    body { font-family: Arial, sans-serif; padding: 24px; }
    .nav a { margin-right: 12px; }
    .box { border: 1px solid #ddd; padding: 16px; border-radius: 10px; margin-top: 14px; }
    code { background: #f6f6f6; padding: 2px 6px; border-radius: 6px; }
  </style>
</head>
<body>
  <h1><?= $judul; ?></h1>

  <div class="nav">
    <a href="index.php">Home</a>
    <a href="form_tambah.php">Tambah Data (Create)</a>
    <a href="list.php">Lihat Data (Read)</a>
    <a href="get_demo.php?nama=Andi&kota=Surabaya">Demo $_GET</a>
  </div>

  <div class="box">
    <h3>PHP Dasar (Echo, Variabel, If-Else, Foreach)</h3>
    <p>Hari ini: <strong><?= $hari; ?></strong></p>

    <?php
      // if-else
      $jam = (int) date("H");
      if ($jam < 12) {
          echo "<p>Selamat pagi!</p>";
      } else {
          echo "<p>Selamat siang/sore!</p>";
      }

      // foreach
      $materi = ["Echo", "Variabel", "Komentar", "If-Else", "Foreach", "$_POST", "$_GET", "MySQL"];
      echo "<p>Materi hari ini:</p><ul>";
      foreach ($materi as $m) {
          echo "<li>$m</li>";
      }
      echo "</ul>";
    ?>
  </div>

  <div class="box">
    <h3>Catatan</h3>
    <p>Untuk fitur database, pastikan Anda sudah meng-import <code>database.sql</code> dan mengatur <code>koneksi.php</code>.</p>
  </div>
</body>
</html>
