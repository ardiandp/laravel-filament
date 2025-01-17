## Instalasi Laravel 10 dan Filament

Berikut adalah tahapan instalasi Laravel 10 dan Filament:

### 1. Install Composer

Pastikan Anda telah menginstall Composer di komputer Anda. Jika belum, Anda dapat mengunduhnya dari [situs resmi Composer](https://getcomposer.org/).

### 2. Buat Proyek Laravel Baru

Untuk menginstal Laravel dari Composer dan mengatur Filament, ikuti langkah-langkah berikut:

1. **Instal Laravel**: Buka terminal dan jalankan perintah berikut untuk membuat proyek Laravel baru:
   ```
   composer create-project --prefer-dist laravel/laravel nama-proyek
   ```

2. **Navigasi ke Direktori Proyek**: Pindah ke direktori proyek yang baru dibuat:
   ```
   cd nama-proyek
   ```

3. **Instal Filament**: Tambahkan paket Filament ke proyek Anda dengan Composer:
   ```
   composer require filament/filament
   ```

4. **Pasang Panel Filament**: Setelah paket Filament terinstal, jalankan perintah berikut untuk menginstal panel Filament:
   ```
   php artisan filament:install
   ```

5. **Buat Pengguna Filament**: Setelah panel Filament terpasang, jalankan perintah berikut untuk membuat pengguna Filament:
   ```
   php artisan make:filament-user
   ```

