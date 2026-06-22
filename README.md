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
