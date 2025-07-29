<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Dokter - ') . Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Daftar Reservasi Anda</h3>

                @if($reservasis && count($reservasis) > 0)
                <table class="w-full border text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-2">No</th>
                            <th class="border p-2">Nama Pasien</th>
                            <th class="border p-2">Tanggal Reservasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservasis as $reservasi)
                        <tr class="text-center">
                            <td class="border p-2">{{ $loop->iteration }}</td>
                            <td class="border p-2">{{ $reservasi->name }}</td>
                            <td class="border p-2">
                                {{ \Carbon\Carbon::parse($reservasi->reservation_date)->translatedFormat('d
                                F Y') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <p class="text-gray-500">Belum ada reservasi untuk Anda.</p>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>