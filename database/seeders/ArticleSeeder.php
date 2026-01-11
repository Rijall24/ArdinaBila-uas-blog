<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article; // Pastikan baris ini ada

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'judul' => 'Artikel Pertama Saya',
            'isi' => 'Halo dunia! Ini adalah contoh artikel untuk tugas UAS Pemrograman Internet.',
            'tanggal_publikasi' => now(),
            'penulis' => 'Admin',
        ]);

        Article::create([
            'judul' => 'Tutorial Laravel Lengkap',
            'isi' => 'Laravel adalah framework PHP yang sangat populer karena sintaksnya yang elegan.',
            'tanggal_publikasi' => now(),
            'penulis' => 'Mahasiswa',
        ]);
    }
}
