<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold">Detail Barang</h2>
                    <div class="mt-4">
                        <div class="mb-3">
                            <label for="nama" class="block text-gray-600 dark:text-gray-200 font-semibold">Nama Barang</label>
                            <p>{{ $barang->nama }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="kode_barang" class="block text-gray-600 dark-text-gray-200 font-semibold">Kode Barang</label>
                            <p>{{ $barang->kode_barang }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="kuantitas" class="block text-gray-600 dark:text-gray-200 font-semibold">Kuantitas</label>
                            <p>{{ $barang->kuantitas }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_masuk" class="block text-gray-600 dark:text-gray-200 font-semibold">Tanggal Masuk</label>
                            <p>{{ $barang->tanggal_masuk }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="block text-gray-600 dark:text-gray-200 font-semibold">Harga</label>
                            <p>{{ $barang->harga }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="block text-gray-600 dark:text-gray-200 font-semibold">Deskripsi</label>
                            <p>{{ $barang->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>