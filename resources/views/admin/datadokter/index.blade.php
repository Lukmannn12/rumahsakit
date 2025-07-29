<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-2 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="p-2">
                        <h1 class="text-xl font-bold mb-4">Manajemen Data Dokter</h1>

                        <a href="{{ route('datadokter.create') }}"
                            class="inline-block bg-green-500 text-sm text-white font-semibold px-4 py-2 rounded shadow transition">
                            + Tambah Data
                        </a>

                        @if (session()->has('message'))
                        <div id="alert" class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg opacity-0 transform translate-y-[-10px] transition-all duration-500 z-50">
                            {{ session('message') }}
                        </div>
                        @endif

                        <div class="overflow-x-auto">
                            <table class="min-w-full table-auto border-collapse mt-4 text-sm text-center">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border p-2">No</th>
                                        <th class="border p-2">Nama</th>
                                        <th class="border p-2">Spesialis</th>
                                        <th class="border p-2">Pengalaman</th>
                                        <th class="border p-2">Harga</th>
                                        <th class="border p-2">Lokasi Praktek</th>
                                        <th class="border p-2">Alumni</th>
                                        <th class="border p-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profiles as $profile)
                                    <tr class="hover:bg-gray-50">
                                        <td class="border p-2">{{ $profile->id }}</td>
                                        <th class="border p-2">{{ $profile->user->name }}</th>
                                        <td class="border p-2">{{ $profile->spesialisasi->nama_spesialisasi }}</td>
                                        <td class="border p-2">{{ $profile->years_of_experience }} Tahun</td>
                                        <td class="border p-2">Rp {{ $profile->price }}</td>
                                        <td class="border p-2">{{ $profile->practice_location }}</td>
                                        <td class="border p-2">{{ $profile->alumni }}</td>
                                        <td class="border p-2">
                                            <button class="bg-red-300 p-2 rounded-sm">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             const alert = document.getElementById('alert');
             if (alert) {
                 // Tampilkan alert
                 setTimeout(() => {
                     alert.classList.remove('opacity-0', 'translate-y-[-10px]');
                     alert.classList.add('opacity-100', 'translate-y-0');
                 }, 100); // Delay sedikit agar transisi smooth

                 // Sembunyikan alert setelah 3 detik
                 setTimeout(() => {
                     alert.classList.remove('opacity-100', 'translate-y-0');
                     alert.classList.add('opacity-0', 'translate-y-[-10px]');
                 }, 3000);
             }
         });
     </script>

 </x-app-layout>
