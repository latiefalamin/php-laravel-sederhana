# 🚀 Rencana Setup Project Laravel Sederhana

## Overview

Setup project PHP menggunakan framework Laravel dengan halaman utama yang menampilkan "Hello World", dilengkapi dengan Dockerfile untuk containerisasi.

---

## Lingkup Pekerjaan

### 1. Inisialisasi Project Laravel
- Buat project Laravel baru menggunakan Composer.
- Pastikan struktur direktori standar Laravel terbentuk dengan benar.

### 2. Halaman Root / Home
- Buat route `/` yang mengarah ke halaman utama.
- Buat view (blade template) dengan konten **"Hello World"**.
- Tambahkan styling CSS sederhana langsung di file blade atau file `.css` statis (tanpa npm / build tool).

### 3. Dockerfile
- Buat `Dockerfile` berbasis image PHP + Apache atau PHP-FPM.
- Salin source code Laravel ke dalam container.
- Pastikan konfigurasi web server mengarah ke folder `public/`.
- Expose port yang sesuai (misalnya port 80).

---

## Kriteria Selesai

- [ ] Project Laravel dapat dijalankan secara lokal.
- [ ] Mengakses `http://localhost` menampilkan halaman "Hello World".
- [ ] Halaman memiliki tampilan CSS dasar (tanpa npm/node).
- [ ] `docker build` dan `docker run` berjalan tanpa error.
- [ ] Mengakses container menampilkan halaman "Hello World" yang sama.

---

## Catatan

- Tidak ada instalasi dependency frontend via npm.
- Styling menggunakan CSS murni (inline atau file statis).
- Fokus pada kesederhanaan — tidak perlu database atau autentikasi.
