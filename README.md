# Aplikasi Blog Sederhana (UAS Pemrograman Internet)

Aplikasi ini adalah sistem manajemen konten (Blog) berbasis web yang dikembangkan menggunakan Framework Laravel. Aplikasi ini dibuat untuk memenuhi tugas Ujian Akhir Semester (UAS).

## Identitas Mahasiswa
- **Nama:** Ardina salsabila
- **NIM:** C2383207009
- **Kelas:** PTI5B
- **Prodi:** Pendidikan Teknologi Informasi, Universitas Muhammadiyah Tasikmalaya

## Deskripsi Aplikasi
Aplikasi ini menerapkan konsep arsitektur **MVC (Model-View-Controller)** dan memiliki fitur:
1.  **Autentikasi:** Login dan Register (Multi-role: Admin & Publik).
2.  **Manajemen Artikel (CRUD):** Admin dapat menambah, mengedit, melihat, dan menghapus artikel.
3.  **Tampilan Publik:** Pengunjung dapat melihat daftar artikel di halaman depan.

## Versi Laravel
Aplikasi ini dibangun menggunakan:
-   **Laravel Framework:** 11.x (atau cek versi anda dengan `php artisan --version`)
-   **PHP:** 8.2+

## Cara Instalasi (Installation)
Ikuti langkah-langkah berikut untuk menjalankan project ini di komputer lokal:

1.  **Clone Repository**
    ```bash
    git clone [MASUKKAN LINK GITHUB ANDA NANTI DISINI]
    cd uas-blog
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install
    npm run build
    ```

3.  **Konfigurasi Environment**
    Salin file contoh konfigurasi:
    ```bash
    cp .env.example .env
    ```
    Kemudian buka file `.env` dan sesuaikan nama database:
    ```text
    DB_DATABASE=uas_blog_db
    ```

4.  **Generate Key & Migrasi Database**
    ```bash
    php artisan key:generate
    php artisan migrate --seed --class=ArticleSeeder
    ```

5.  **Jalankan Server**
    ```bash
    php artisan serve
    ```

## Akun Demo
Untuk pengujian, gunakan akun berikut:
-   **Email:** admin@admin.com
-   **Password:** password
