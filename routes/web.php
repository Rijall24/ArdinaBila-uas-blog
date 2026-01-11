<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController; // Pastikan baris ini ada!
use App\Models\Article;
use Illuminate\Support\Facades\Route;

// --- HALAMAN PUBLIK ---
Route::get('/', function () {
    $articles = Article::latest()->get();
    return view('welcome', compact('articles'));
});

// --- HALAMAN DASHBOARD ---
Route::get('/dashboard', function () {
    return redirect()->route('articles.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// --- GRUP ADMIN (LOGIN DULU) ---
Route::middleware('auth')->group(function () {
    // Route resource untuk artikel
    Route::resource('articles', ArticleController::class);

    // Route bawaan Breeze untuk profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
