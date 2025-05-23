# SPK Rekomendasi Hotel

Sistem Pendukung Keputusan untuk memberikan rekomendasi hotel terbaik menggunakan metode ELECTRE.

## ✅ Dibangun Menggunakan PHP 8.1.6

Project ini dikembangkan menggunakan PHP versi **8.1.6**.

> ❗ Jika Anda menggunakan versi selain 8.1.6 (seperti PHP 8.2 ke atas), pastikan untuk memperhatikan kompatibilitas sistem, karena beberapa fungsi CodeIgniter 3 mungkin tidak berjalan dengan baik di versi terbaru PHP.

### Spesifikasi Minimum

- PHP versi **8.1.6**
- MySQL/MariaDB
- Apache/Nginx
- phpMyAdmin (jika menggunakan XAMPP/Laragon)

## 📦 Fitur Utama

- Manajemen data hotel
- Manajemen kriteria dan subkriteria
- Perhitungan otomatis berdasarkan metode SPK
- Halaman admin dan pengguna
- Formulir kontak untuk feedback

---

## 🔐 Login Admin

- **Username:** admin
- **Password:** admin

---

## 🚀 Cara Instalasi

Ikuti langkah-langkah berikut untuk menjalankan project di lokal Anda:

### 1. Download Project

- Klik tombol **Code** di halaman GitHub project ini.
- Pilih **Download ZIP**.
- Ekstrak file ZIP ke direktori server lokal Anda (misal: `htdocs` jika menggunakan XAMPP).

### 2. Buat Database Baru

- Buka **phpMyAdmin**.
- Buat database baru dengan nama `spk-rek-hotel`
  > Anda juga bisa menggunakan nama lain, tetapi pastikan untuk menyesuaikannya di file konfigurasi database (`application/config/database.php`).

### 3. Import Database

- Buka database `spk-rek-hotel` yang baru dibuat.
- Klik **Import**, lalu pilih file SQL yang berada di dalam folder `database` pada project ini (contoh: `database/spk-rek-hotel.sql`).
- Jalankan import.

### 4. Konfigurasi Base URL dan Database

- Buka file `application/config/config.php`, ubah `base_url` menjadi sesuai alamat lokal Anda. Contoh:
  ```php
  $config['base_url'] = 'http://localhost/spk-rek-hotel/';
  ```
