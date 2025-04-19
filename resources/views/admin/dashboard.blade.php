<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Kartu Jumlah Dokter -->
            <div class="bg-white shadow-md rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-lg hover:shadow-indigo-500/50">
                <h3 class="text-xl font-semibold text-gray-900">Jumlah Dokter</h3>
                <p class="mt-2 text-2xl font-bold text-indigo-600">12</p>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>