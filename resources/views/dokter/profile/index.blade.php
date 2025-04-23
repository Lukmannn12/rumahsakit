<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    @if (session()->has('message'))
    <div id="alert" class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg opacity-0 transform translate-y-[-10px] transition-all duration-500 z-50">
        {{ session('message') }}
    </div>
    @endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col md:flex-row">

                <!-- Profile Picture and Info Section -->
                <div class="md:w-1/3 text-white text-center p-8">
                    <div class="w-48 h-48 rounded-full bg-gray-200 flex items-center justify-center mx-auto mb-4 border-4 border-white">
                        @if(Auth::user()->profile && Auth::user()->profile->gambar)
                        <!-- Jika ada gambar -->
                        <img src="{{ asset('storage/' . Auth::user()->profile->gambar) }}" alt="Foto Profil" class="w-full h-full object-cover rounded-full">
                        @else
                        <!-- Jika tidak ada gambar, tampilkan icon default -->
                        <i class="fas fa-user fa-3x text-gray-500"></i>
                        @endif
                    </div>

                    <h3 class="text-2xl text-gray-800 font-semibold">{{ Auth::user()->name }}</h3>
                    <p class="text-gray-800 mb-4">{{ Auth::user()->email }}</p>
                </div>

                <!-- Profile Details -->
                <div class="md:w-2/3 p-8 space-y-6">
                    @if ($profile)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-6 rounded-2xl shadow-md">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-stethoscope text-indigo-500 text-xl mt-1"></i>
                            <div>
                                <p class="text-gray-600">Spesialisasi</p>
                                <p class="font-semibold text-gray-800">{{ $profile->spesialisasi->nama_spesialisasi ?? 'Tidak ada spesialisasi' }}</p>
                            </div>

                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-calendar-alt text-indigo-500 text-xl mt-1"></i>
                            <div>
                                <p class="text-gray-600">Pengalaman</p>
                                <p class="font-semibold text-gray-800">{{ $profile->years_of_experience }} tahun</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-money-bill-wave text-indigo-500 text-xl mt-1"></i>
                            <div>
                                <p class="text-gray-600">Biaya Konsultasi</p>
                                <p class="font-semibold text-gray-800">Rp{{ number_format($profile->price, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-university text-indigo-500 text-xl mt-1"></i>
                            <div>
                                <p class="text-gray-600">Alumni</p>
                                <p class="font-semibold text-gray-800">{{ $profile->alumni }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-indigo-500 text-xl mt-1"></i>
                            <div>
                                <p class="text-gray-600">Lokasi Praktek</p>
                                <p class="font-semibold text-gray-800">{{ $profile->practice_location }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-id-card text-indigo-500 text-xl mt-1"></i>
                            <div>
                                <p class="text-gray-600">No. STR</p>
                                <p class="font-semibold text-gray-800">{{ $profile->str_number }}</p>
                            </div>
                        </div>
                    </div>

                    @else
                    {{-- Tampilkan tombol "Lengkapi Profil" --}}
                    {{-- Tampilkan notifikasi dan tombol --}}
                    <div class="text-center mt-8 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-6 rounded-xl shadow-sm">
                        <div class="flex flex-col items-center space-y-4">
                            <i class="fas fa-exclamation-triangle text-4xl text-yellow-500"></i>
                            <p class="text-lg font-semibold">Profil Anda belum lengkap</p>
                            <p class="text-sm text-gray-600">Silakan lengkapi profil Anda terlebih dahulu untuk menampilkan data dan memulai aktivitas sebagai dokter.</p>
                            <a href="{{ route('profiledokter.create') }}"
                                class="inline-block px-6 py-2 bg-indigo-600 text-white font-medium rounded-full shadow-md hover:bg-indigo-700 transition duration-300">
                                Lengkapi Profil
                            </a>
                        </div>
                    </div>
                    @endif

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