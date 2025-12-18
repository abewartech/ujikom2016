# UJIKOM 2016 Rental Mobil

[![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)](#)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](#license)
![Build Status](https://img.shields.io/badge/build-passing-brightgreen.svg)

A simple PHP-based web application for managing a small car rental business.  
It provides basic CRUD operations for master data (mobil, sopir, pelanggan, pemilik), recording transactions and setoran, and generating summary views for daily operations.

---

## Features

- Manajemen data karyawan, pelanggan, sopir, pemilik, dan kendaraan.
- Pencatatan transaksi rental dan setoran pembayaran.
- Input dan update data service kendaraan.
- Halaman login dan sesi pengguna dasar.
- Tampilan data (view) terpisah untuk setiap entitas utama.
- Contoh skema database MySQL siap impor (`rental_mobil.sql`).

---

## Screenshots

> Catatan: pastikan file gambar tersedia di folder `screenshots/`.

| ![Screenshot 1](screenshots/screen1.png) | ![Screenshot 2](screenshots/screen2.png) | ![Screenshot 3](screenshots/screen3.png) |
|:---:|:---:|:---:|
| *Dashboard / Menu utama* | *Form input transaksi* | *Daftar kendaraan* |

---

## Installation

### Prerequisites

- PHP 5.6+ / 7.x
- Web server (Apache, Nginx, atau paket seperti XAMPP/Laragon)
- MySQL / MariaDB
- Git (opsional, untuk clone repository)

### Steps

1. **Clone repository atau download source code**

   ```bash
   git clone https://github.com/your-username/ujikom-rental-mobil.git
   cd ujikom-rental-mobil
   ```

   Atau download ZIP dan ekstrak ke direktori web server, misalnya:

   ```text
   C:\xampp\htdocs\ujikom-rental-mobil
   ```

2. **Buat database**

   - Buat database baru, misalnya `rental_mobil`.
   - Impor file `rental_mobil.sql` ke database tersebut.

   ```sql
   CREATE DATABASE rental_mobil;
   USE rental_mobil;
   -- kemudian impor isi file rental_mobil.sql
   ```

3. **Konfigurasi koneksi database**

   Buka file `koneksi.php` dan sesuaikan dengan konfigurasi lokal Anda:

   ```php
   <?php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db   = "rental_mobil";

   $koneksi = mysqli_connect($host, $user, $pass, $db) or die("Koneksi gagal");
   ?>
   ```

4. **Jalankan aplikasi di browser**

   Akses melalui browser:

   ```text
   http://localhost/ujikom-rental-mobil/index.php
   ```

---

## Usage

1. **Login**

   Buka halaman `login.php` atau melalui `index.php` jika diarahkan ke form login.  
   Gunakan kredensial yang sudah diset di database (misalnya user yang ada di tabel karyawan / admin).

2. **Navigasi menu**

   - `menu.php` dan `sidebar.php` menyediakan navigasi menuju:
     - Data Karyawan (`dkaryawan.php`, `vkaryawan.php`, `ikaryawan.php`, `ekendaraan.php`, dll.)
     - Data Kendaraan (`dkendaraan.php`, `vkendaraan.php`, `ikendaraan.php`, `ukendaraan.php`)
     - Data Pelanggan (`dpelanggan.php`, `vpelanggan.php`, `ipelanggan.php`)
     - Data Sopir (`dsopir.php`, `vsopir.php`, `isopir.php`)
     - Data Pemilik (`dpemilik.php`, `vpemilik.php`, `ipemilik.php`)
     - Transaksi (`itransaksi.php`, `itransaksik.php`, `itransaksip.php`, `vtransaksi.php`, dll.)
     - Setoran (`dsetoran.php`, `vsetoran.php`, `psetoran.php`, `isetoran.php`)
     - Service kendaraan (`dservice.php`, `vservice.php`, `iservice.php`)

3. **Contoh snippet penggunaan koneksi database**

   ```php
   <?php
   include 'koneksi.php';

   $sql   = "SELECT * FROM dkendaraan";
   $query = mysqli_query($koneksi, $sql);

   while ($row = mysqli_fetch_assoc($query)) {
       echo $row['no_polisi'] . " - " . $row['merk'] . "<br>";
   }
   ?>
   ```

4. **Logout**

   Untuk mengakhiri sesi, gunakan `logout.php` yang akan menghancurkan sesi dan kembali ke halaman login.

---

## Project Structure

Beberapa file / direktori penting:

- `index.php` – Halaman awal / routing utama.
- `login.php`, `logout.php` – Autentikasi dan pengelolaan sesi.
- `menu.php`, `sidebar.php` – Template menu dan navigasi.
- `koneksi.php` – Konfigurasi koneksi MySQL.
- `*_karyawan.php`, `*kendaraan.php`, `*pelanggan.php`, `*pemilik.php`, `*sopir.php` – CRUD untuk masing-masing master data.
- `*transaksi*.php`, `*setoran*.php`, `*service*.php` – Proses dan tampilan data transaksi, setoran, dan service.
- `v*.php` – View / daftar data (misalnya `vkendaraan.php`, `vtransaksi.php`).
- `i*.php` – Input / form tambah data.
- `u*.php` / `e*.php` – Update atau edit data.
- `style/` – File CSS dan aset front‑end lainnya.
- `rental_mobil.sql` – Dump skema dan data awal database.

---

## Technologies

- ![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
- ![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
- ![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
- ![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
- ![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?logo=bootstrap&logoColor=white)

---

## Contributing

Kontribusi sangat terbuka, terutama untuk:

- Perapihan tampilan (UI/UX).
- Penambahan validasi form.
- Perbaikan keamanan (misalnya penggunaan prepared statement).
- Dokumentasi tambahan atau terjemahan.

Langkah umum untuk berkontribusi:

1. Fork repository ini.
2. Buat branch fitur baru:

   ```bash
   git checkout -b feature/nama-fitur-baru
   ```

3. Lakukan perubahan dan pastikan aplikasi tetap berjalan.
4. Commit perubahan Anda dengan pesan yang jelas:

   ```bash
   git commit -m "feat: tambahkan fitur X"
   ```

5. Push ke branch Anda dan buka Pull Request ke repository utama.

---

## License

This project is licensed under the **MIT License** – see the `LICENSE` file (jika tersedia di repository ini) atau tambahkan file lisensi MIT sebelum digunakan dalam produksi.


