<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Artikel</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('articles.update', $article->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700">Judul Artikel</label>
                        <input type="text" name="judul" value="{{ $article->judul }}" class="w-full border-gray-300 rounded shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Tanggal Publikasi</label>
                        <input type="date" name="tanggal_publikasi" value="{{ $article->tanggal_publikasi }}" class="w-full border-gray-300 rounded shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Isi Artikel</label>
                        <textarea name="isi" rows="5" class="w-full border-gray-300 rounded shadow-sm" required>{{ $article->isi }}</textarea>
                    </div>

                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
