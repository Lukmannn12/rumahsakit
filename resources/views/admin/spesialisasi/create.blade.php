<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center">
            <span>{{ __('Data Pengguna') }}</span>
            <i class="fa fa-arrow-right mx-2 text-sm"></i>
            <span>{{ __('Create') }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="p-2">
                        <h1 class="text-xl font-bold mb-4">Tambah Data</h1>

                        <!-- Form Input Data Pengguna -->
                        <form action="{{ route('spesialisasi.store') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <!-- Name & Email in the same row -->
                            <div class="mb-4 gap-4">
                                <label for="nama_spesialisasi" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" name="nama_spesialisasi" id="nama_spesialisasi" value="{{ old('nama_spesialisasi') }}"
                                    class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm"
                                    placeholder="Nama Spesialisasi" required>
                            </div>
                    </div>
                    <div>
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                        <input type="file" name="gambar" id="gambar"
                            class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-indigo-50 file:text-indigo-700
                                hover:file:bg-indigo-100">
                    </div>


                        <!-- Buttons -->
                        <div class="flex justify-end space-x-2 mt-6">
                            <a href=""
                                class="bg-gray-200 text-gray-700 px-4 text-sm py-2 rounded hover:bg-gray-300 transition">Batal</a>
                            <button type="submit" class="bg-indigo-600 text-sm text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>