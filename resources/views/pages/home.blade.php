@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="px-6 md:px-12 py-16 grid md:grid-cols-2 gap-16 items-center">

    {{-- LEFT --}}
    <div>
        <span class="text-sm text-violet-400 tracking-widest uppercase">Hello</span>

        <h2 class="mt-4 text-4xl md:text-5xl font-extrabold leading-tight">
            I am<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-indigo-400">
                Winky Tio Pratama
            </span>
        </h2>

        <p class="mt-6 text-slate-400 max-w-xl">
            Portofolio pribadi dengan slider project, login system, dan UI modern.
        </p>

        <div class="flex gap-4 mt-10">
            <button class="bg-violet-600 hover:bg-violet-700 px-6 py-3 rounded-lg shadow-lg">
                Download CV Winky
            </button>

            <a href="{{ route('project') }}"
               class="border border-slate-600 hover:border-violet-500 px-6 py-3 rounded-lg transition">
                Explore More
            </a>
        </div>
    </div>

    {{-- RIGHT --}}
    <div class="relative">
        <div class="absolute inset-0 bg-gradient-to-tr from-violet-600/30 to-transparent rounded-3xl blur-2xl"></div>

        <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-6 shadow-2xl">

            <h3 class="text-center text-2xl font-bold mb-6">
                PORTFOLIO PREVIEW
            </h3>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="bg-slate-800/80 p-4 rounded-xl">
                    <p class="text-xs text-violet-400">Website</p>
                    <h4 class="font-semibold">Landing Page</h4>
                </div>
                <div class="bg-slate-800/80 p-4 rounded-xl">
                    <p class="text-xs text-violet-400">Dashboard</p>
                    <h4 class="font-semibold">Admin Panel</h4>
                </div>
            </div>

            {{-- SLIDER --}}
            <div class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl overflow-hidden border border-white/10">
                <div class="relative h-[300px] flex items-center justify-center">
                    <img id="sliderImage"
                         class="max-h-full max-w-full object-contain transition-all duration-500"
                         alt="Portfolio Preview">
                </div>

                <button onclick="prevSlide()"
                        class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/70 w-10 h-10 rounded-full text-xl">
                    ‹
                </button>

                <button onclick="nextSlide()"
                        class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/70 w-10 h-10 rounded-full text-xl">
                    ›
                </button>

                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2"
                     id="sliderIndicators"></div>
            </div>

            <div class="mt-4 grid grid-cols-4 gap-2" id="thumbnailContainer"></div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('js/slider.js') }}"></script>
@endpush
