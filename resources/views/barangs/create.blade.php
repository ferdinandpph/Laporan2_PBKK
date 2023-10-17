<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('barangs.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="nama" class="block text-gray-600 dark:text-gray-200">Nama Barang</label>
                            <input type="text" name="nama" id="nama" class="form-input" required>
                        </div>

                        <div class="mb-4">
                            <label for="kode_barang" class="block text-gray-600 dark:text-gray-200">Kode Barang</label>
                            <input type="text" name="kode_barang" id="kode_barang" class="form-input" required>
                        </div>

                        <div class="mb-4">
                            <label for="kuantitas" class="block text-gray-600 dark:text-gray-200">Kuantitas</label>
                            <input type="number" name="kuantitas" id="kuantitas" class="form-input" required>
                        </div>

                        <div class="mb-4">
                            <label for="tanggal_masuk" class="block text-gray-600 dark:text-gray-200">Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-input" required>
                        </div>

                        <div class="mb-4">
                            <label for="harga" class="block text-gray-600 dark:text-gray-200">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-input" required>
                        </div>

                        <div class="mb-4">
                            <label for="deskripsi" class="block text-gray-600 dark:text-gray-200">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-textarea" rows="4" required></textarea>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Simpan Barang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>