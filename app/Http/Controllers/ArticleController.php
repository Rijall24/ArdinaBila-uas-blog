<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request; // Pastikan ini ada
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Menampilkan daftar artikel (Halaman Admin).
     */
    public function index()
    {
        // Mengambil data terbaru dulu
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Menampilkan form untuk membuat artikel baru.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Menyimpan artikel baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input sesuai syarat
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'tanggal_publikasi' => 'required|date',
        ]);

        // Simpan data
        Article::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal_publikasi' => $request->tanggal_publikasi,
            'penulis' => Auth::user()->name, // Otomatis ambil nama user yang login
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit artikel.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update data artikel yang diedit.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'tanggal_publikasi' => 'required|date',
        ]);

        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Menghapus artikel.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
