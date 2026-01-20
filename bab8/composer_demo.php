<?php
// BAB 8.1: Contoh pakai library via Composer (Carbon)
// Langkah:
//
// 1) Jalankan di terminal pada folder bab8:
//    composer install
//
// 2) Jalankan via server lokal:
//    http://localhost/nama-folder/bab8/composer_demo.php

require __DIR__ . "/vendor/autoload.php";

use Carbon\Carbon;

date_default_timezone_set("Asia/Jakarta");

$now = Carbon::now();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Demo Composer + Carbon</title>
  <style>body{font-family:Arial,sans-serif;padding:24px}</style>
</head>
<body>
  <h2>Demo Composer + Carbon</h2>
  <p>Waktu sekarang: <strong><?= $now->toDateTimeString(); ?></strong></p>
  <p>Human readable: <strong><?= $now->diffForHumans(); ?></strong></p>
</body>
</html>
