<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Data Siswa</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 24px; }
    label { display: block; margin-top: 10px; }
    input, select { padding: 8px; width: 320px; max-width: 100%; }
    button { margin-top: 14px; padding: 10px 14px; cursor: pointer; }
    .nav a { margin-right: 12px; }
  </style>
</head>
<body>
  <h2>Form Tambah Data (Create) – BAB 7</h2>
  <div class="nav">
    <a href="index.php">Home</a>
    <a href="list.php">Lihat Data (Read)</a>
  </div>

  <!-- Penting: name="" agar bisa ditangkap PHP lewat $_POST -->
  <form action="proses_tambah.php" method="POST">
    <label>Nama</label>
    <input type="text" name="nama" required />

    <label>Email</label>
    <input type="email" name="email" required />

    <label>Kota</label>
    <select name="kota">
      <option value="Jakarta">Jakarta</option>
      <option value="Bandung">Bandung</option>
      <option value="Surabaya">Surabaya</option>
    </select>

    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" />

    <button type="submit">Simpan</button>
  </form>
</body>
</html>
