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
                        <h1 class="text-xl font-bold mb-4">Tambah Pengguna</h1>

                        <!-- Form Input Data Pengguna -->
                        <form action="" method="POST">
                            
                            <!-- Name & Email in the same row -->
                            <div class="mb-4 flex gap-4">
                                <div class="w-1/2">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                </div>

                                <div class="w-1/2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                                        class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm"
                                        placeholder="Email" required>
                                </div>
                            </div>

                            <!-- Password & Role in the same row -->
                            <div class="mb-4 flex gap-4">
                                <div class="w-1/2">
                                <label for="years_of_experience" class="block text-sm font-medium text-gray-700">Lama Bekerja (tahun)</label>
                                <input type="number" name="years_of_experience" id="years_of_experience" value="{{ old('years_of_experience') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                </div>

                                <div class="w-1/2">
                                <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                                <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                </div>
                            </div>

                             <!-- Password & Role in the same row -->
                             <div class="mb-4 flex gap-4">
                                <div class="w-1/2">
                                <label for="alumni" class="block text-sm font-medium text-gray-700">Alumni</label>
                                <input type="text" name="alumni" id="alumni" value="{{ old('alumni') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                </div>

                                <div class="w-1/2">
                                <label for="practice_location" class="block text-sm font-medium text-gray-700">Tempat Praktik</label>
                                <input type="text" name="practice_location" id="practice_location" value="{{ old('practice_location') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                </div>
                            </div>
                             <!-- Password & Role in the same row -->
                             <div class="mb-4 flex gap-4">
                                <div class="w-1/2">
                                <label for="str_number" class="block text-sm font-medium text-gray-700">Nomor STR</label>
                                <input type="text" name="str_number" id="str_number" value="{{ old('str_number') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                </div>

                                <div class="w-1/2">
                                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                <select name="role" id="role"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                    <option value="dokter" {{ old('role') == 'dokter' ? 'selected' : '' }}>Dokter</option>
                                    <option value="staff" {{ old('role') == 'staff' ? 'selected' : '' }}>Staff</option>
                                </select>
                                </div>
                            </div>

                            <div class="mb-4">
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