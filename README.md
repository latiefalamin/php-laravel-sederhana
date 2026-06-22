# Laravel Sederhana

Aplikasi Laravel sederhana yang berfokus pada fungsionalitas registrasi, login, dan manajemen pengguna dasar tanpa menggunakan modul *frontend* eksternal (CSS Murni).

## 🛠️ Tools yang Digunakan
- **Backend:** Laravel 11 (PHP 8.4)
- **Database:** MySQL 8.0
- **Environment:** Docker & Docker Compose
- **Frontend:** HTML & CSS Murni (Tanpa menggunakan NPM / Node.js)

## 🚀 Cara Menjalankan Project
Project ini telah diatur sepenuhnya dengan Docker sehingga Anda tidak perlu menginstal PHP atau MySQL secara manual.

1. Buka terminal dan arahkan ke direktori *root* project.
2. Pastikan Docker sudah berjalan, lalu ketikkan perintah berikut:
   ```bash
   docker-compose up -d --build
   ```
3. Tunggu hingga proses *build* selesai. Buka browser dan akses:
   👉 **http://localhost:8080**

*(Catatan: Proses `php artisan migrate` dan `key:generate` akan dieksekusi secara otomatis oleh Docker).*

### Cara Menjalankan Tanpa Docker (Manual)
Jika Anda tidak ingin menggunakan Docker, pastikan Anda telah menginstal PHP (minimal versi 8.2) dan Composer. Anda juga memerlukan server database MySQL.

1. Masuk ke direktori `app/`:
   ```bash
   cd app
   ```
2. Instal dependensi PHP menggunakan Composer:
   ```bash
   composer install
   ```
3. Salin file environment dan *generate key* aplikasi:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Buka file `app/.env`, lalu sesuaikan konfigurasi koneksi database Anda (misalnya `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
5. Jalankan migrasi database:
   ```bash
   php artisan migrate
   ```
6. Jalankan server bawaan Laravel:
   ```bash
   php artisan serve
   ```
7. Buka browser dan akses URL yang diberikan (biasanya `http://localhost:8000`).

## 💾 Detail Database
- **Host / Port:** `localhost` / `3307` (Jika ingin diakses melalui aplikasi klien dari host)
- **Database:** `laravel`
- **Username:** `laravel`
- **Password:** `secret`

### Struktur Tabel
Aplikasi ini utamanya menggunakan tabel standar dari Laravel:
- **`users`**: Tabel untuk menyimpan data pengguna yang mendaftar.
  - `id` (Primary Key)
  - `name` (Nama lengkap pengguna)
  - `email` (Alamat email pengguna, unik)
  - `password` (Kata sandi yang telah dienkripsi bcrypt)
  - `created_at` / `updated_at` (Timestamp pendaftaran)

## 🧪 Cara Menjalankan Unit Test
Aplikasi ini dilengkapi dengan sekumpulan *Automated Test* (Unit & Feature Test) menggunakan pustaka PHPUnit bawaan Laravel untuk memverifikasi kesehatan *endpoint*.

**Bila menggunakan Docker:**
```bash
docker-compose exec app php artisan test
```

**Bila dijalankan secara manual (Lokal):**
Pastikan Anda berada di dalam direktori `app/`, lalu ketikkan perintah:
```bash
php artisan test
```
