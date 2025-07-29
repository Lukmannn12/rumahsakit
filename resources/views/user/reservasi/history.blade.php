@extends('user.layouts.app')
@section('content')


<div class="container mx-auto px-4">
    <h2 class="text-2xl font-bold mb-4">Riwayat Reservasi</h2>

    @if(count($reservasis) > 0)
    <table class="min-w-full table-auto border-collapse mt-4 text-sm text-center">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">No</th>
                <th class="border p-2">User ID</th>
                <th class="border p-2">Nama User</th>
                <th class="border p-2">Nama Dokter</th>
                <th class="border p-2">Spesialis</th>
                <th class="border p-2">Tanggal Reservasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservasis as $index => $reservasi)
            <tr class="hover:bg-gray-50">
                <td class="border p-2">{{ $index + 1 }}</td>
                <td class="border p-2">{{ $reservasi->user_id }}</td>
                <td class="border p-2">{{ $reservasi->user->name ?? '-' }}</td>
                <td class="border p-2">{{ $reservasi->profile->user->name ?? '-' }}</td>
                <td class="border p-2">{{ $reservasi->profile->spesialisasi->nama_spesialisasi
                    ?? '-' }}</td>
                <td class="border p-2">
                    {{ \Carbon\Carbon::parse($reservasi->reservation_date)->translatedFormat('d
                    F Y') }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Kamu belum pernah melakukan reservasi.</p>
    @endif
</div>
@endsection