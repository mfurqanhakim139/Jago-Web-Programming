-- BAB 7: Database contoh (MySQL)
-- Buat database (ubah nama jika perlu)
CREATE DATABASE IF NOT EXISTS belajar_web CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE belajar_web;

-- Tabel siswa (contoh sederhana untuk CRUD Create & Read)
CREATE TABLE IF NOT EXISTS siswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  email VARCHAR(120) NOT NULL,
  kota VARCHAR(50) DEFAULT NULL,
  tanggal_lahir DATE DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Data dummy (opsional)
INSERT INTO siswa (nama, email, kota, tanggal_lahir) VALUES
('Budi Santoso', 'budi@example.com', 'Jakarta', '2004-05-10'),
('Siti Aminah', 'siti@example.com', 'Bandung', '2005-11-02');
