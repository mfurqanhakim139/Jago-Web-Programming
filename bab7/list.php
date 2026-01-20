<?php
require_once "koneksi.php";

$result = mysqli_query($koneksi, "SELECT id, nama, email, kota, tanggal_lahir, created_at FROM siswa ORDER BY id DESC");
if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

$msg = isset($_GET["msg"]) ? $_GET["msg"] : "";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Siswa</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 24px; }
    table { border-collapse: collapse; width: 100%; max-width: 980px; }
    th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
    th { background: #f3f3f3; }
    .nav a { margin-right: 12px; }
    .ok { background: #e7fff0; border: 1px solid #b4f1c8; padding: 10px; display: inline-block; border-radius: 8px; }
  </style>
</head>
<body>
  <h2>Data Siswa (Read) – BAB 7</h2>

  <div class="nav">
    <a href="index.php">Home</a>
    <a href="form_tambah.php">Tambah Data</a>
  </div>

  <?php if ($msg === "sukses"): ?>
    <p class="ok">✅ Data berhasil disimpan.</p>
  <?php endif; ?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Kota</th>
        <th>Tanggal Lahir</th>
        <th>Dibuat</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= (int)$row["id"]; ?></td>
          <td><?= htmlspecialchars($row["nama"]); ?></td>
          <td><?= htmlspecialchars($row["email"]); ?></td>
          <td><?= htmlspecialchars($row["kota"] ?? "-"); ?></td>
          <td><?= htmlspecialchars($row["tanggal_lahir"] ?? "-"); ?></td>
          <td><?= htmlspecialchars($row["created_at"]); ?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>
