@extends('user.layouts.app')

@section('content')
<section class="py-5 xl:px-2 px-2">
    <div class="container flex flex-col md:flex-row justify-center items-center py-1 xl:px-10">
        <div class="space-y-6">
            <h1 class="text-2xl xl:text-5xl lg:text-4xl md:text-3xl sm:text-xl font-bold tracking-wide xl:leading-snug">
                Solusi Kesehatanmu Konsultasi <span class="text-[#095D7E]">Sekarang</span>
            </h1>
            <p class="text-[#696969] text-sm font-normal">
                Memberikan kemudahan berkonsultasi dengan dokter berpengalaman di seluruh Indonesia
                yang sesuai dengan keluhan penyakitmu.
            </p>
            <button class="py-3 px-5 xl:py-4 xl:px-9 bg-[#095D7E] text-[#F1F9FF] text-sm xl:text-base font-medium rounded-lg">
                Layanan Dokter
            </button>
        </div>
        <div class="hidden md:block justify-center items-center">
            <img src="/image/bg-landing.png" alt="Gambar" class="xl:w-[950px] xl:h-[550px] md:w-[950px] md:h-[350px] lg:w-[950px] lg:h-[450px]  ">
        </div>
    </div>
</section>

<section id="kategori spesialis">
    <div class="py-10">
        <div class="space-y-5">
            <h1 class="font-bold text-3xl text-black">Konsultasi Spesialis Terpercaya</h1>
            <div class="grid grid-cols-1 xl:grid-cols-3">
                <button class="border border-[#095D7E] rounded-md flex items-center justify-between w-full py-2 px-3">
                    <span class="flex-grow text-center">Dokter Umum</span>
                    <i class="fas fa-user-md ml-2"></i>
                </button>
                <button>wbdhdhb</button>
                <button>wbjwb</button>
            </div>
            </div>

    </div>
</section>
@endsection