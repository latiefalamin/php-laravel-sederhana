# 📋 Rencana Fitur List User

## Overview

Menambahkan halaman untuk menampilkan daftar pengguna yang sudah melakukan registrasi di aplikasi. Halaman ini diproteksi hanya untuk user yang sudah login, dan akan mengembalikan error 404 bagi user yang belum login.

---

## Lingkup Pekerjaan

### 1. Middleware Proteksi Akses

- Buat/gunakan *middleware* untuk mengecek status autentikasi user saat mengakses halaman list user.
- **Logika Middleware:** Jika user belum login, lemparkan error 404 (Not Found) menggunakan fungsi bantuan Laravel (`abort(404)`).

### 2. Controller & Route

- Buat `UserController` dengan satu method (misalnya `index()`).
- Di dalam method `index()`, ambil semua data user dari database menggunakan model `User::all()` (atau pagination).
- Tambahkan route `GET /users` yang diarahkan ke method `index()` pada `UserController` dan terapkan *middleware* yang dibuat pada langkah pertama.

### 3. Tampilan Halaman (View)

- Buat *view* `users.blade.php`.
- Tampilkan data user dalam bentuk tabel sederhana (Nama, Email, Tanggal Terdaftar).
- Gunakan style CSS dasar (murni tanpa instalasi npm) yang senada dengan halaman lain.
- Tambahkan tombol navigasi untuk kembali ke halaman utama.

### 4. Navigasi

- Perbarui `home.blade.php`.
- Tambahkan tombol/link ke "Daftar User" yang hanya terlihat saat user sudah berhasil login.

---

## Kriteria Selesai

- [ ] Route `/users` berhasil dibuat.
- [ ] Mengakses `/users` saat belum login akan memunculkan halaman 404.
- [ ] Mengakses `/users` saat sudah login akan menampilkan tabel berisi daftar nama dan email user.
- [ ] Halaman menggunakan CSS statis yang rapi tanpa perlu Node/npm.
- [ ] Terdapat link di halaman utama untuk menuju halaman `/users`.
