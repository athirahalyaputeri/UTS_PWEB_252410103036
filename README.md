
# BookSpace

## Deskripsi Project

BookSpace merupakan aplikasi web berbasis Laravel. Aplikasi ini dikembangkan sebagai platform sederhana untuk mengelola informasi buku dan menyediakan fitur-fitur yang berkaitan dengan pengelolaan data buku.

## Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- HTML
- CSS
- Bootstrap

## Fitur Aplikasi

- Halaman utama (Home)
- Halaman Profile
- Pengelolaan data buku
- Tampilan antarmuka yang sederhana dan mudah digunakan

## Cara Menjalankan Project

1. Clone repository:
   ```bash
   git clone https://github.com/athirahalyaputeri/UTS_PWEB_252410103036.git
   ```

2. Masuk ke folder project:
   ```bash
   cd UTS_PWEB_252410103036
   ```

3. Install dependency:
   ```bash
   composer install
   ```

4. Salin file konfigurasi:
   ```bash
   cp .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Sesuaikan konfigurasi database pada file `.env`.

7. Jalankan migrasi database:
   ```bash
   php artisan migrate
   ```

8. Jalankan aplikasi:
   ```bash
   php artisan serve
   ```

9. Buka aplikasi melalui browser:

   http://127.0.0.1:8000

## Screenshot Aplikasi

### Halaman Login
![Halaman Login](Login.png)

### Halaman Profile
![Halaman Profile](Profile.png)

### Halaman Dashboard
![Halaman Dashboard](Dashboard.png)

### Halaman Pengelolaan
![Halaman Pengelolaan](Pengelolaan.png)

## Identitas Pengembang

- **Nama:** Athirah Alya' Puteri
- **NIM:** 252410103036
- **Program Studi:** Informatika
- **Fakultas:** Ilmu Komputer
- **Universitas:** Universitas Jember

## Tujuan

Project ini dibuat sebagai salah satu bentuk penerapan materi Pemrograman Web, khususnya dalam pengembangan aplikasi web menggunakan framework Laravel.
