# Checklist Migrasi Local -> Hosting (cPanel)

## 1) Export Database (.sql) dari Localhost
- Buka phpMyAdmin (local)
- Pilih database proyek
- Menu Export -> Quick -> Format SQL -> Go
- Simpan file `database.sql`

## 2) Siapkan proyek (ZIP)
- Pastikan file proyek rapi (hapus node_modules/vendor jika diminta hosting, tapi biasanya vendor dibutuhkan untuk Composer)
- ZIP folder proyek (misal: `project.zip`)

## 3) Upload & Extract di cPanel
- cPanel -> File Manager
- Masuk `public_html`
- Upload `project.zip`
- Extract

## 4) Buat Database & User di cPanel
- MySQL Database Wizard
- Buat Database
- Buat User + Password
- Beri privilege: ALL PRIVILEGES

## 5) Import database .sql
- cPanel -> phpMyAdmin
- Pilih database baru
- Import -> pilih `database.sql` -> Go

## 6) Konfigurasi koneksi.php
- Edit file koneksi.php di File Manager
- Sesuaikan:
  - host (biasanya localhost)
  - username (user cPanel)
  - password
  - dbname (db cPanel)

## 7) Tes dan Troubleshooting
- Jika error koneksi DB: cek host/user/pass/dbname
- Jika error 500: cek .htaccess / versi PHP / permission
