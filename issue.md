# 📋 Rencana Pengujian Otomatis (Unit/Feature Test)

## Overview
Menambahkan pengujian otomatis (*Unit Test* / *Feature Test*) menggunakan *framework* bawaan Laravel (PHPUnit/Pest) untuk seluruh *endpoint* aplikasi. Hal ini untuk memastikan fungsionalitas utama tetap stabil dan terhindar dari *bug* ketika ada perubahan kode di masa mendatang.

---

## Lingkup Pengujian (Endpoints)

Pengujian akan difokuskan pada simulasi akses *HTTP request* (*Feature Testing*):

### 1. Halaman Publik
- **`GET /` (Halaman Utama)**
  - Mengembalikan status HTTP 200.
  - Memastikan teks "Hello World" atau "Selamat datang" berhasil dimuat.

### 2. Autentikasi & Registrasi
- **`GET /register` & `POST /register`**
  - Halaman registrasi bisa diakses dengan normal.
  - Proses registrasi sukses bila diisi dengan data valid (data masuk ke database).
  - Proses registrasi gagal (muncul *error validasi*) bila email sudah terdaftar atau password tidak cocok.
- **`GET /login` & `POST /login`**
  - Halaman login bisa diakses dengan normal.
  - User berhasil masuk dengan kredensial yang valid.
  - Login ditolak dan memunculkan *error* jika kredensial salah.
- **`POST /logout`**
  - Berhasil menghapus *session* login dan mengembalikan user ke rute awal `/`.

### 3. Manajemen Daftar User (Area Terproteksi)
- **`GET /users` (Daftar User)**
  - Menolak akses (status 404) bagi pengunjung yang belum login.
  - Menampilkan daftar tabel user secara normal bagi pengunjung yang sudah login.
- **`GET /users/{id}/delete` (Hapus User)**
  - Menolak akses (status 404) bagi pengunjung yang belum login.
  - Berhasil menghapus akun milik *user* lain dan diarahkan kembali (*redirect*) dengan pesan sukses.
  - Mengagalkan dan menampilkan pesan *error* apabila *user* mencoba untuk menghapus akun miliknya sendiri.

---

## Kriteria Selesai
- [ ] Dibuatkan file *test class* untuk `AuthTest` dan `UserFeatureTest` di direktori `tests/Feature/`.
- [ ] Skrip pengujian berjalan menggunakan basis data dalam memori (SQLite) sehingga cepat dan tidak mengotori *database development/production*.
- [ ] Komando eksekusi `php artisan test` mengembalikan status *Passed* untuk semua skenario di atas.
