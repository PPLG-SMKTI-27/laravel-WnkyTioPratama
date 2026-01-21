@extends('layouts.app')

@section('title', 'Projects')

@section('content')

{{-- ===== DB TEST (boleh dihapus nanti) ===== --}}
<div class="text-center text-xs text-slate-500 mt-4">
    DB TEST: {{ $projects->count() }}
</div>

<!-- HEADER -->
<section class="px-12 pt-16 pb-24 text-center">
    <h2 class="text-4xl md:text-5xl font-extrabold">
        Project
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-indigo-400">
            Journey
        </span>
    </h2>

    <p class="mt-6 text-slate-400 max-w-2xl mx-auto leading-relaxed">
        Track record perjalanan project saya sebagai pelajar PPLG dan
        Full Stack Developer — divisualisasikan seperti peta perjalanan.
    </p>
</section>

<!-- MAP / TIMELINE -->
<section class="relative px-12 pb-32 max-w-6xl mx-auto">

    <!-- GARIS TENGAH -->
    <div class="absolute left-1/2 top-0 bottom-0 w-[2px] bg-gradient-to-b from-violet-500/40 to-indigo-500/10"></div>

    @php
        $dots = [
            'bg-violet-500 shadow-violet-500/50',
            'bg-indigo-500 shadow-indigo-500/50',
            'bg-pink-500 shadow-pink-500/50',
            'bg-emerald-500 shadow-emerald-500/50',
        ];
    @endphp

    @forelse($projects as $i => $p)

        @php $left = $i % 2 === 0; @endphp

        <div class="relative grid md:grid-cols-2 gap-12 mb-24">

            {{-- CARD --}}
            <div class="{{ $left ? 'md:text-right' : 'order-2 md:order-2' }}">
                <div class="inline-block rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6 max-w-xl">
                    <span class="text-xs text-violet-400 uppercase">Project</span>

                    <h3 class="mt-2 text-xl font-bold">
                        {{ $p->title }}
                    </h3>

                    @if($p->excerpt)
                        <p class="mt-3 text-slate-400 text-sm leading-relaxed">
                            {{ $p->excerpt }}
                        </p>
                    @endif

                    <div class="mt-4 flex gap-4 text-sm {{ $left ? 'md:justify-end' : '' }}">
                        @if($p->demo_url)
                            <a href="{{ $p->demo_url }}" target="_blank" class="wc-link">
                                Demo
                            </a>
                        @endif

                        @if($p->repo_url)
                            <a href="{{ $p->repo_url }}" target="_blank" class="wc-link">
                                Repo
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            {{-- DOT --}}
            <div class="relative {{ $left ? '' : 'order-1 md:order-1' }}">
                <span
                    class="absolute left-1/2 top-6 -translate-x-1/2 w-5 h-5 rounded-full shadow-lg {{ $dots[$i % count($dots)] }}">
                </span>
            </div>

        </div>

    @empty
        <div class="wc-card p-6 text-slate-300 max-w-2xl mx-auto text-center">
            Belum ada project yang dipublish.
        </div>
    @endforelse

    <!-- END -->
    <div class="text-center mt-32">
        <span
            class="inline-block px-6 py-3 rounded-full bg-gradient-to-r from-violet-500 to-indigo-500 text-sm font-semibold shadow-lg shadow-violet-500/40">
            Journey Continues 🚀
        </span>
    </div>

</section>

<!-- FOOTER -->
<footer class="border-t border-white/10 py-6 text-center text-slate-500 text-sm">
    © 2026 <span class="text-violet-400">Winky Tio Pratama</span>. All Rights Reserved.
</footer>

@endsection
