@extends('user.layouts.app')

@section('content')
<section class="py-8 px-4 max-w-xl mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Buat Reservasi</h1>

    <div class="bg-white p-6 rounded-xl shadow-md">
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800">{{ $profile->user->name }}</h2>
            <p class="text-sm text-gray-500">{{ $profile->spesialisasi->nama_spesialisasi ?? 'Tidak Ada Spesialisasi' }}</p>
            <p class="text-sm text-gray-600">Tempat Praktek: {{ $profile->practice_location }}</p>
        </div>

        <form action="{{ route('reservasi.store') }}" method="POST">
            @csrf
            <input type="hidden" name="profile_id" value="{{ $profile->id }}">

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Tanggal dan Waktu Reservasi</label>
                <input type="datetime-local" name="reservation_date" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                Simpan Reservasi
            </button>
        </form>
    </div>
</section>
@endsection
