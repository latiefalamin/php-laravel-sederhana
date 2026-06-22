# 📋 Rencana Fitur Registrasi User

## Overview

Menambahkan fitur registrasi user ke aplikasi Laravel, dengan penyimpanan data ke database MySQL yang dijalankan via Docker Compose.

---

## Lingkup Pekerjaan

### 1. Docker Compose — MySQL + Laravel

- Buat `docker-compose.yaml` dengan dua service:
  - **`db`** — MySQL, expose port internal, dengan volume untuk persistensi data.
  - **`app`** — Container Laravel (dari `Dockerfile` yang sudah ada), terhubung ke service `db`.
- Pastikan Laravel dapat terhubung ke MySQL menggunakan nama service sebagai host (e.g. `DB_HOST=db`).

### 2. Konfigurasi Database Laravel

- Update `.env` (atau `.env.example`) dengan kredensial MySQL yang sesuai.
- Jalankan migration bawaan Laravel untuk membuat tabel `users`.

### 3. Model & Migration User

- Gunakan model `User` dan migration bawaan Laravel yang sudah tersedia.
- Pastikan kolom yang digunakan: `name`, `email`, `password` (bcrypt via `Hash::make()`).

### 4. Controller & Route Registrasi

- Buat `RegisterController` dengan dua method:
  - `showForm()` — menampilkan halaman form registrasi.
  - `register()` — memvalidasi input, menyimpan user dengan password ter-enkripsi bcrypt.
- Tambahkan route `GET /register` dan `POST /register`.

### 5. Halaman Registrasi

- Buat view `register.blade.php` dengan form berisi:
  - Field: Nama Lengkap, Email, Password, Konfirmasi Password.
  - Tampilkan pesan error validasi jika ada.
- Styling menggunakan CSS sederhana murni (tanpa npm / build tool).

---

## Kriteria Selesai

- [ ] `docker-compose up` menjalankan MySQL dan Laravel sekaligus.
- [ ] Laravel berhasil terhubung ke MySQL.
- [ ] Migration berhasil dijalankan (tabel `users` terbentuk).
- [ ] Mengakses `/register` menampilkan form registrasi.
- [ ] Submitting form menyimpan data user ke database.
- [ ] Password tersimpan dalam format bcrypt (bukan plaintext).
- [ ] Validasi input berjalan (email unik, password minimal 8 karakter, dll).

---

## Catatan

- Tidak ada instalasi frontend via npm.
- Styling menggunakan CSS murni (inline atau file statis).
- Gunakan fitur bawaan Laravel: `Hash::make()`, `Validator`, dan migration.
- Tidak perlu fitur login atau autentikasi sesi untuk scope ini.
