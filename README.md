# Laravel WSLMS Application

Aplikasi ini adalah sistem manajemen berbasis Laravel yang mencakup berbagai modul untuk operasional dan manajemen sumber daya manusia.

## Modul-Modul Aplikasi

Aplikasi ini terdiri dari modul-modul berikut:

### 1. Modul Onboarding
Mengelola proses onboarding karyawan baru, mencakup status, tanggal mulai, dan catatan penting lainnya.

### 2. Modul Posisi
Manajemen posisi karyawan dalam perusahaan.
**Daftar Posisi:**
- Manager
- SPV (Supervisor)
- Kasir
- Cook
- Waiter
- Helper
- Cleaner

### 3. Modul Soft Skill
Katalog dan manajemen soft skill yang diperlukan atau dimiliki oleh karyawan.

### 4. Modul Leadership
Modul untuk pelacakan pelatihan dan penilaian kepemimpinan (leadership).

### 5. Modul Audit & Compliance
- **Audit**: Pencatatan audit internal, temuan, dan status audit.
- **Compliance**: Pemantauan kepatuhan terhadap regulasi dan standar yang berlaku.

### 6. Dashboard KPI
Dashboard untuk memantau Key Performance Indicators (KPI) karyawan, termasuk target dan realisasi.

### 7. Talent Pool & Promotion Tracker
- **Talent Pool**: Mengidentifikasi dan melacak karyawan potensial (high potential).
- **Promotion Tracker**: Mencatat riwayat promosi karyawan dari satu posisi ke posisi lainnya beserta alasannya.

## Instalasi

1. Clone repository ini.
2. Jalankan `composer install`.
3. Salin `.env.example` ke `.env` dan konfigurasi database.
4. Jalankan `php artisan key:generate`.
5. Jalankan `php artisan migrate`.
6. Jalankan `php artisan serve` untuk memulai server lokal.

## Lisensi

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
