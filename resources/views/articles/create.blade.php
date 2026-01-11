<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Artikel Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('articles.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Judul Artikel</label>
                        <input type="text" name="judul" class="w-full border-gray-300 rounded shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Tanggal Publikasi</label>
                        <input type="date" name="tanggal_publikasi" class="w-full border-gray-300 rounded shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Isi Artikel</label>
                        <textarea name="isi" rows="5" class="w-full border-gray-300 rounded shadow-sm" required></textarea>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
