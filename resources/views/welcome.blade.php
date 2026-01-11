<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog UAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center text-xl font-bold text-gray-800">Blog Mahasiswa</div>
                <div class="flex items-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-700 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 underline mr-4">Log in</a>
                            <a href="{{ route('register') }}" class="text-gray-700 underline">Register</a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-6">Artikel Terbaru</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($articles as $article)
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-2">{{ $article->judul }}</h2>
                <p class="text-sm text-gray-500 mb-4">
                    Oleh {{ $article->penulis }} | {{ $article->tanggal_publikasi }}
                </p>
                <p class="text-gray-700 line-clamp-3">{{ $article->isi }}</p>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
