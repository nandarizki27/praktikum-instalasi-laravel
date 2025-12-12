 📦 PRAKTIKUM INSTALASI DAN KONFIGURASI LARAVEL

Dokumen ini berisi rangkuman langkah-langkah praktikum mata kuliah Rekayasa Web mengenai instalasi, konfigurasi dasar, *routing*, dan penggunaan Blade Template Engine di Laravel.

## 👤 Identitas Mahasiswa

| Kategori | Detail |
| :--- | :--- |
| **Nama** | NANDA RIZKI RAMADHAN |
| **NIM** | G.211.23.0025 |
| **Mata Kuliah** | Rekayasa Web |
| **Topik** | Instalasi dan Konfigurasi Laravel |

-----

## 🎯 Tujuan Praktikum

1.  Menginstall *framework* Laravel versi terbaru.
2.  Memahami struktur folder Laravel (pola **MVC**).
3.  Menjalankan *development server* menggunakan **Artisan**.
4.  Mengimplementasikan *routing* sederhana.
5.  Membuat **View** dan **Blade Template** (Layout).

-----

## 🔧 Prasyarat Lingkungan Pengembangan

Sebelum menjalankan proyek, pastikan lingkungan lokal telah memenuhi persyaratan:

  * **PHP:** Versi 8.1 atau lebih tinggi.
  * **Composer:** *Package manager* untuk PHP.

### Verifikasi Prasyarat

```bash
php -v
composer -v
```

*(Tambahkan screenshot hasil pengecekan versi PHP dan Composer Anda di sini jika diperlukan.)*

-----

## ⚙️ Rangkuman Langkah Implementasi

Proyek ini dibuat dengan nama folder **`praktikum-instalasi-laravel`**.

### 1\. Proses Instalasi dan Key Generate

Proyek dibuat menggunakan Composer dan *key* aplikasi digenerate:

```bash
composer create-project laravel/laravel praktikum-instalasi-laravel
cd praktikum-instalasi-laravel
php artisan key:generate
```

### 2\. Implementasi Routing (`routes/web.php`)

Route dimodifikasi untuk menautkan ke halaman-halaman yang dibuat:

| Route | View/Aksi | Keterangan |
| :--- | :--- | :--- |
| `/` | `welcome.blade.php` | Halaman Utama yang dimodifikasi. |
| `/hello` | Teks | Mengembalikan *string* langsung. |
| `/profil` | `profil.blade.php` | Menampilkan data profil mahasiswa. |
| `/dashboard` | `dashboard.blade.php` | Menampilkan dashboard menggunakan **Blade Layout**. |

### 3\. Implementasi Blade Template

  * **Layout Utama:** Dibuat di `resources/views/layouts/app.blade.php`.
  * **View Dashboard:** Dibuat di `resources/views/dashboard.blade.php`, yang menggunakan layout dengan *directive* `@extends('layouts.app')`.

-----

## 📸 Hasil Tampilan Aplikasi

Berikut adalah hasil akhir tampilan antarmuka yang sudah diimplementasikan di proyek ini. Semua gambar diambil dari folder **`screenshots/`** lokal.

### A. Halaman Utama (Welcome Page)

**Nama File Gambar:** `01-welcome-page.jpg`

### B. Halaman Profil Mahasiswa

**Nama File Gambar:** `02-profil-page.jpg`

### C. Halaman Dashboard (Menggunakan Blade Layout)

**Nama File Gambar:** `03-dashboard-page.png`

-----

## 🔨 Artisan Commands Penting

Aplikasi dijalankan menggunakan server bawaan Laravel:

```bash
php artisan serve
```

Perintah Artisan lain yang digunakan:

| Perintah | Fungsi |
| :--- | :--- |
| `php artisan serve` | Menjalankan *development server* di `http://localhost:8000`. |
| `php artisan route:list` | Menampilkan daftar semua *route* aplikasi. |
| `php artisan make:controller NamaController` | Membuat *Controller* baru. |

-----
