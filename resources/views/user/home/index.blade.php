@extends('user.layouts.app')

@section('content')
<section class="py-8 px-4">

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Dokter</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-6 gap-6">
        @foreach($dokter as $d)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <img src="{{ asset('storage/' . $d->gambar) }}" alt="Foto Dokter" class="w-full h-48 object-cover">

            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $d->user->name }}</h2>
                <p class="text-sm text-gray-500">{{ $d->spesialisasi->nama_spesialisasi ?? 'Tidak Ada Spesialisasi' }}</p>

                <ul class="mt-3 space-y-1 text-sm text-gray-600">
                    <li><strong>Pengalaman:</strong> {{ $d->years_of_experience }} tahun</li>
                    <li><strong>Harga Konsultasi:</strong> Rp{{ number_format($d->price, 0, ',', '.') }}</li>
                    <li><strong>Alumni:</strong> {{ $d->alumni }}</li>
                    <li><strong>Tempat Praktek:</strong> {{ $d->practice_location }}</li>
                    <li><strong>STR:</strong> {{ $d->str_number }}</li>
                </ul>
                <a href="{{ route('reservasi.create') }}?profile_id={{ $d->id }}"
                    class="mt-4 inline-block text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-lg">
                    Reservasi
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection