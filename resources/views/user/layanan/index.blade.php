@extends('user.layouts.app')

@section('content')

<section id="layanan">
    <div class="pt-10">
        <div class="flex flex-col justify-center items-center gap-3">
            <p class="text-sm font-bold text-[#095D7E]">Layanan telemedisin yang siap siaga membantu keluhanmu</p>
            <h1 class="font-bold text-xl xl:text-3xl text-black">Chat Dokter di Healty<span class="text-[#095D7E]">Me</span></h1>
            <div class="max-w-screen-lg grid grid-cols-1 xl:grid-cols-3 py-2 xl:py-8 gap-5">
                <div class="bg-[#F1F9FF] shadow-md p-6 space-y-5 border-t-4 border-[#095D7E]">
                    <div class="flex justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#095D7E]" width="48" height="48" viewBox="0 0 24 24">
                            <circle cx="12" cy="6" r="4" fill="currentColor" />
                            <path fill="currentColor" d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5" />
                        </svg>
                    </div>
                    <h1 class="font-bold text-sm text-black">Pilih Dokter Spesialis</h1>
                    <p class="text-[#696969] text-xs font-normal">Pilih dokter spesialis menyesuaikan
                        dengan keluhan penyakitmu</p>
                </div>
                <div class="bg-[#F1F9FF] shadow-md p-6 space-y-5 border-t-4 border-[#095D7E]">
                    <div class="flex justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#095D7E]" width="48" height="48" viewBox="0 0 48 48">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M24 4v4m10-1.32l-2 3.464M41.32 14l-3.464 2M44 24h-4m1.32 10l-3.464-2M34 41.32l-2-3.464M24 44v-4m-10 1.32l2-3.464M6.68 34l3.464-2M4 24h4M6.68 14l3.464 2M14 6.68l2 3.464" />
                        </svg>
                    </div>
                    <h1 class="font-bold text-sm text-black">Tunggu Persetujuan Dokter</h1>
                    <p class="text-[#696969] text-xs font-normal">Tunggu dokter. Dokter akan menyetujui
                        permintaan kamu</p>
                </div>
                <div class="bg-[#F1F9FF] shadow-md p-6 space-y-5 border-t-4 border-[#095D7E]">
                    <div class="flex justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#095D7E]" width="48" height="48" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                        </svg>
                    </div>
                    <h1 class="font-bold text-sm text-black">Bicara Dengan Dokter</h1>
                    <p class="text-[#696969] text-xs font-normal">Saat kamu telah terhubung dengan dokter, silahkan jelaskan kondisi kamu dengan tenang dan jelas.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-10">
        <div class="space-y-5">
            <h1 class="font-bold xl:text-3xl text-xl text-black">Konsultasi Spesialis Terpercaya</h1>
        </div>
        <p class="text-[#14967F] font-bold text-sm pt-5">Pilih kategori yang tersedia sesuai kondisimu</p>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 md:grid-cols-4  xl:grid-cols-5 py-5 gap-8">
        <button class="border border-[#095D7E] rounded-md flex items-center justify-between w-full py-2 px-3">
            <span class="flex-grow text-center text-[#095D7E] font-bold text-sm">Dokter Umum</span>
            <i class="fas fa-user-md ml-2 text-[#095D7E]"></i>
        </button>
        <button class="border border-[#095D7E] rounded-md flex items-center justify-between w-full py-2 px-3">
            <span class="flex-grow text-center text-[#095D7E] font-bold text-sm">Dokter Umum</span>
            <i class="fas fa-user-md ml-2 text-[#095D7E]"></i>
        </button>
        <button class="border border-[#095D7E] rounded-md flex items-center justify-between w-full py-2 px-3">
            <span class="flex-grow text-center text-[#095D7E] font-bold text-sm">Dokter Umum</span>
            <i class="fas fa-user-md ml-2 text-[#095D7E]"></i>
        </button>
        <button class="border border-[#095D7E] rounded-md flex items-center justify-between w-full py-2 px-3">
            <span class="flex-grow text-center text-[#095D7E] font-bold text-sm">Dokter Umum</span>
            <i class="fas fa-user-md ml-2 text-[#095D7E]"></i>
        </button>
        <button class="border border-[#095D7E] rounded-md flex items-center justify-between w-full py-2 px-3">
            <span class="flex-grow text-center text-[#095D7E] font-bold text-sm">Dokter Umum</span>
            <i class="fas fa-user-md ml-2 text-[#095D7E]"></i>
        </button>
        <button class="border border-[#095D7E] rounded-md flex items-center justify-between w-full py-2 px-3">
            <span class="flex-grow text-center text-[#095D7E] font-bold text-sm">Dokter Umum</span>
            <i class="fas fa-user-md ml-2 text-[#095D7E]"></i>
        </button>
        <button class="border border-[#095D7E] rounded-md flex items-center justify-between w-full py-2 px-3">
            <span class="flex-grow text-center text-[#095D7E] font-bold text-sm">Dokter Umum</span>
            <i class="fas fa-user-md ml-2 text-[#095D7E]"></i>
        </button>
        <button class="border border-[#095D7E] rounded-md flex items-center justify-between w-full py-2 px-3">
            <span class="flex-grow text-center text-[#095D7E] font-bold text-sm">Dokter Umum</span>
            <i class="fas fa-user-md ml-2 text-[#095D7E]"></i>
        </button>
    </div>
</section>

@endsection