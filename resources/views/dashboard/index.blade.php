@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
@php
    $totalProjects = \App\Models\Project::count();
    $publishedProjects = \App\Models\Project::where('is_published', true)->count();
    $draftProjects = $totalProjects - $publishedProjects;

    $recentProjects = \App\Models\Project::orderByDesc('id')->limit(5)->get();
@endphp

<div class="space-y-6">

    {{-- Header --}}
    <div class="wc-card p-6">
        <h1 class="text-2xl font-bold">Dashboard</h1>
        <p class="text-slate-300 mt-1">Selamat datang owner. Kelola portfolio kamu dari sini.</p>

        <div class="mt-5 flex flex-wrap gap-3">

            <a href="{{ route('dashboard.projects.create') }}"
               class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 font-semibold text-white hover:bg-white/10 transition">
                + New Project
            </a>

            <a href="{{ route('project') }}"
               class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 font-semibold text-white hover:bg-white/10 transition">
                Lihat Halaman Project →
            </a>
        </div>
    </div>

    {{-- Stats --}}
    <div class="grid sm:grid-cols-3 gap-4">
        <div class="wc-card p-5">
            <p class="text-sm text-slate-300">Total Projects</p>
            <p class="text-3xl font-extrabold mt-2">{{ $totalProjects }}</p>
        </div>

        <div class="wc-card p-5">
            <p class="text-sm text-slate-300">Published</p>
            <p class="text-3xl font-extrabold mt-2">{{ $publishedProjects }}</p>
        </div>

        <div class="wc-card p-5">
            <p class="text-sm text-slate-300">Draft / Hidden</p>
            <p class="text-3xl font-extrabold mt-2">{{ $draftProjects }}</p>
        </div>
    </div>

    {{-- Recent + Tips --}}
    <div class="grid lg:grid-cols-2 gap-4">

        {{-- Recent Projects --}}
        <div class="wc-card p-6">
            <div class="flex items-center justify-between gap-3">
                <div>
                    <h2 class="text-lg font-bold">Recent Projects</h2>
                    <p class="text-slate-300 text-sm mt-1">5 project terakhir yang kamu buat.</p>
                </div>
            </div>

            <div class="mt-4 overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="text-slate-300">
                        <tr class="border-b border-white/10">
                            <th class="text-left py-2 pr-4">Title</th>
                            <th class="text-left py-2 pr-4">Slug</th>
                            <th class="text-left py-2 pr-4">Status</th>
                            <th class="text-right py-2">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($recentProjects as $p)
                            <tr class="border-b border-white/10">
                                <td class="py-3 pr-4 font-medium text-white">
                                    {{ $p->title }}
                                </td>
                                <td class="py-3 pr-4 text-slate-300">
                                    {{ $p->slug }}
                                </td>
                                <td class="py-3 pr-4">
                                    @if($p->is_published)
                                        <span class="inline-flex items-center rounded-full bg-emerald-500/15 text-emerald-300 px-2 py-1 text-xs border border-emerald-500/20">
                                            Published
                                        </span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-slate-500/15 text-slate-300 px-2 py-1 text-xs border border-white/10">
                                            Draft
                                        </span>
                                    @endif
                                </td>
                                <td class="py-3 text-right">
                                    <a href="{{ route('dashboard.projects.edit', $p) }}"
                                       class="text-violet-300 hover:text-violet-200 underline-offset-4 hover:underline">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-6 text-center text-slate-400">
                                    Belum ada project. Klik <b>+ New Project</b> untuk membuat.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4 flex flex-wrap gap-3">
                <a href="{{ route('dashboard.projects.create') }}" class="wc-btn">
                    + New Project
                </a>
                <a href="{{ route('project') }}"
                   class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 font-semibold text-white hover:bg-white/10 transition">
                    Preview /project →
                </a>
            </div>
        </div>

        {{-- Tips --}}
        <div class="wc-card p-6">
            <h2 class="text-lg font-bold">Tips</h2>
            <ul class="mt-3 text-sm text-slate-300 space-y-2 list-disc pl-5">
                <li>Kalau project belum muncul di halaman publik, pastikan <b>Published</b> aktif.</li>
                <li>Demo URL & Repo URL wajib format URL valid (pakai <b>https://</b>).</li>
                <li>Gunakan slug yang unik (tidak sama dengan project lain).</li>
                <li>Urutan tampil mengikuti <b>sort_order</b> lalu id terbaru.</li>
            </ul>
        </div>

    </div>

</div>
@endsection
