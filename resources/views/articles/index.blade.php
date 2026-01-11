<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('articles.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                    + Tambah Artikel
                </a>

                <table class="table-auto w-full mt-4 border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2">Judul</th>
                            <th class="border border-gray-300 px-4 py-2">Penulis</th>
                            <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                            <th class="border border-gray-300 px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $article->judul }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $article->penulis }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $article->tanggal_publikasi }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                |
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
