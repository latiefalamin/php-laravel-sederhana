# 📋 Rencana Fitur Login User

## Overview

Menambahkan fitur autentikasi (login) user ke aplikasi Laravel menggunakan email dan password yang sudah terdaftar.

---

## Lingkup Pekerjaan

### 1. Controller & Route Login

- Buat `LoginController` dengan dua method:
  - `showForm()` — menampilkan halaman form login.
  - `login()` — memproses input (email & password) dan melakukan autentikasi.
- Tambahkan route `GET /login` dan `POST /login`.

### 2. Proses Autentikasi

- Gunakan fitur autentikasi bawaan Laravel (`Auth::attempt`).
- **Jika Sukses:** Redirect user ke halaman welcome/home.
- **Jika Gagal:** Redirect user kembali ke halaman login dan tampilkan pesan error (misal: "Email atau password salah").

### 3. Halaman Login

- Buat view `login.blade.php` dengan form berisi:
  - Field: Email dan Password.
  - Area untuk menampilkan pesan error jika login gagal.
- Styling menggunakan CSS sederhana murni (tanpa instalasi npm), bisa menggunakan file CSS yang sudah ada atau inline style yang senada dengan halaman registrasi.

---

## Kriteria Selesai

- [ ] Mengakses `/login` menampilkan form login.
- [ ] Login dengan email dan password yang salah akan kembali ke halaman login dengan pesan error.
- [ ] Login dengan kredensial yang benar akan mengarahkan user ke halaman welcome/home.
- [ ] Halaman login menggunakan styling CSS sederhana tanpa npm.
