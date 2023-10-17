<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between mb-3">
                        <h2 class="text-2xl font-semibold">Daftar Barang</h2>
                        <a href="{{ route('barangs.create') }}" class="btn btn-primary">Add Barang</a>
                    </div>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="text-left">Nama</th>
                                <th class="text-left">Kode Barang</th>
                                <th class="text-left">Kuantitas</th>
                                <th class="text-left">Tanggal Masuk</th>
                                <th class="text-left">Harga</th>
                                <th class="text-left">Deskripsi</th>
                                <th class="text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kode_barang }}</td>
                                    <td>{{ $item->kuantitas }}</td>
                                    <td>{{ $item->tanggal_masuk }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('barangs.show', $item->id) }}" class="btn btn-info">Detail</a>
                                        <a href="{{ route('barangs.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('barangs.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>