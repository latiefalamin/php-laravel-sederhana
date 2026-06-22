# 📋 Rencana Fitur Hapus User

## Overview

Menambahkan fungsionalitas untuk menghapus pengguna dari aplikasi. Fitur ini hanya bisa diakses oleh user yang sudah login melalui halaman daftar user, dengan proteksi agar user tidak dapat menghapus akun miliknya sendiri.

---

## Lingkup Pekerjaan

### 1. Controller & Route

- Tambahkan method `destroy($id)` di dalam `UserController`.
- **Logika Hapus:**
  - Cek apakah `$id` yang akan dihapus sama dengan ID user yang sedang aktif login (`Auth::id()`).
  - Jika **sama**, proses dibatalkan dan redirect kembali dengan pesan error (misal: "Anda tidak dapat menghapus akun Anda sendiri").
  - Jika **berbeda**, hapus data user dari database dan redirect kembali dengan pesan sukses.
- Tambahkan route `GET /users/{id}/delete` yang mengarah ke `UserController@destroy`.
- Pastikan route ini diproteksi menggunakan pengecekan autentikasi (middleware atau pengecekan di controller).

### 2. Update Tampilan Halaman List User (`users.blade.php`)

- Tambahkan kolom baru bernama "Aksi" pada tabel.
- Berikan tombol/link "Hapus" untuk setiap data user yang mengarah ke endpoint `GET /users/{id}/delete`.
- Terapkan fungsi `onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?');"` pada tombol untuk menampilkan dialog konfirmasi bawaan browser sebelum *request* dijalankan.
- Sembunyikan atau nonaktifkan tombol hapus pada baris data milik user yang sedang login saat ini.

### 3. Penanganan Pesan (Flash Message)

- Tambahkan area *alert*/notifikasi sederhana di atas tabel daftar user untuk menangkap dan menampilkan *flash message* (pesan sukses maupun error) hasil dari proses penghapusan.

---

## Kriteria Selesai

- [ ] Terdapat route `GET /users/{id}/delete` yang menangani proses penghapusan.
- [ ] Tombol "Hapus" tersedia di tabel halaman `/users`.
- [ ] Dialog konfirmasi muncul sebelum menghapus data.
- [ ] Menghapus data akan me-redirect kembali ke `/users` dengan pesan sukses.
- [ ] Mencoba menghapus akun yang sedang login akan gagal dan menampilkan pesan error.
