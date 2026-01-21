@extends('layouts.app')

@section('title', 'Home')

@section('content')
  {{-- BACKDROP / ORBS --}}
  <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
    <div class="absolute -top-40 -left-40 h-[520px] w-[520px] rounded-full bg-violet-600/25 blur-3xl"></div>
    <div class="absolute top-20 -right-48 h-[620px] w-[620px] rounded-full bg-indigo-600/20 blur-3xl"></div>
    <div class="absolute bottom-[-200px] left-1/2 -translate-x-1/2 h-[520px] w-[520px] rounded-full bg-fuchsia-500/10 blur-3xl"></div>
  </div>

  {{-- HERO (FULL-WIDTH, BUKAN 1 CARD) --}}
  <section class="relative">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 pt-14 sm:pt-16 pb-10">
      <div class="grid lg:grid-cols-2 gap-10 items-center">
        <div>
          <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs text-slate-200">
            <span class="inline-block h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_18px_rgba(52,211,153,0.7)]"></span>
            Winky Creative • Laravel • UI • Portfolio
          </div>

          <h1 class="mt-6 text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight">
            Halo, saya
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-indigo-400">
              Winky
            </span>
            <br class="hidden sm:block" />
            Full Stack Developer.
          </h1>

          <p class="mt-5 text-slate-300 leading-relaxed max-w-xl">
            Saya membangun website yang <b class="text-white">modern</b>, <b class="text-white">rapi</b>, dan
            <b class="text-white">punya fitur real</b> (CRUD + Auth + Database).
            Project yang <b class="text-white">Published</b> akan tampil di halaman publik.
          </p>

          <div class="mt-7 flex flex-wrap gap-3">
            <a href="{{ route('project') }}" class="wc-btn">
              Lihat Portfolio →
            </a>

            <a href="{{ route('about') }}"
               class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 font-semibold text-white hover:bg-white/10 transition">
              Tentang Winky
            </a>

            @auth
              <a href="{{ route('dashboard.index') }}"
                 class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 font-semibold text-white hover:bg-white/10 transition">
                Dashboard
              </a>
            @else
              <a href="{{ route('login') }}"
                 class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 font-semibold text-white hover:bg-white/10 transition">
                Login Owner
              </a>
            @endauth
          </div>

          {{-- MINI BADGES (NYEBAR, RAME) --}}
          <div class="mt-8 flex flex-wrap gap-2">
            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-slate-200">Laravel 12</span>
            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-slate-200">MySQL</span>
            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-slate-200">Tailwind</span>
            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-slate-200">Dashboard CRUD</span>
            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-slate-200">Glass UI</span>
          </div>
        </div>

        {{-- HERO RIGHT: CARD GRID --}}
        <div class="grid sm:grid-cols-2 gap-4">
          <div class="wc-card p-6">
            <p class="text-xs text-violet-300">01 • Portfolio</p>
            <h3 class="mt-2 font-bold text-lg">Showcase yang rapi</h3>
            <p class="mt-2 text-sm text-slate-300">
              Project yang published otomatis muncul di halaman publik /project.
            </p>
          </div>

          <div class="wc-card p-6">
            <p class="text-xs text-indigo-300">02 • Dashboard</p>
            <h3 class="mt-2 font-bold text-lg">Kelola dari admin</h3>
            <p class="mt-2 text-sm text-slate-300">
              Tambah, edit, publish/unpublish, dan atur urutan tampil.
            </p>
          </div>

          <div class="wc-card p-6 sm:col-span-2">
            <div class="flex items-start justify-between gap-4">
              <div>
                <p class="text-xs text-emerald-300">03 • Owner Only</p>
                <h3 class="mt-2 font-bold text-lg">Aman & sederhana</h3>
                <p class="mt-2 text-sm text-slate-300">
                  Login hanya untuk owner, public tetap bisa lihat portfolio tanpa register.
                </p>
              </div>
              <span class="hidden sm:inline-flex items-center rounded-full bg-emerald-500/15 text-emerald-300 px-3 py-1 text-xs border border-emerald-500/20">
                Protected
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- SECTION DIVIDER --}}
    <div class="max-w-7xl mx-auto px-5 sm:px-8">
      <div class="h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
    </div>
  </section>

  {{-- STATS STRIP (FULL WIDTH, NYEBAR) --}}
  <section class="max-w-7xl mx-auto px-5 sm:px-8 py-10">
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="wc-card p-6">
        <p class="text-xs text-slate-300">Brand</p>
        <p class="mt-2 text-2xl font-extrabold">Winky Creative</p>
        <p class="mt-1 text-sm text-slate-300">Portfolio + Dashboard</p>
      </div>

      <div class="wc-card p-6">
        <p class="text-xs text-slate-300">Focus</p>
        <p class="mt-2 text-2xl font-extrabold">Full Stack</p>
        <p class="mt-1 text-sm text-slate-300">UI • CRUD • Auth</p>
      </div>

      <div class="wc-card p-6">
        <p class="text-xs text-slate-300">Stack</p>
        <p class="mt-2 text-2xl font-extrabold">Laravel</p>
        <p class="mt-1 text-sm text-slate-300">MySQL • Tailwind</p>
      </div>

      <div class="wc-card p-6">
        <p class="text-xs text-slate-300">Target</p>
        <p class="mt-2 text-2xl font-extrabold">Clean & Fast</p>
        <p class="mt-1 text-sm text-slate-300">Modern UI vibe</p>
      </div>
    </div>
  </section>

  {{-- TECH STACK (NYEBAR, ADA BAR) --}}
  <section class="max-w-7xl mx-auto px-5 sm:px-8 pb-4">
    <div class="grid lg:grid-cols-3 gap-4">
      <div class="wc-card p-6 lg:col-span-2">
        <div class="flex items-end justify-between gap-4">
          <div>
            <h2 class="text-2xl font-bold">Tech Stack</h2>
            <p class="text-slate-300 text-sm mt-2">Skill yang sering saya pakai untuk bikin project beneran.</p>
          </div>
          <a href="{{ route('project') }}" class="hidden sm:inline wc-link">Lihat Project →</a>
        </div>

        <div class="mt-6 grid sm:grid-cols-2 gap-4">
          @php
            $skills = [
              ['name'=>'Laravel', 'desc'=>'Routing, Eloquent, Middleware, Auth, CRUD', 'w'=>'86%', 'bar'=>'bg-violet-500/70'],
              ['name'=>'Tailwind', 'desc'=>'Responsive layout, glass UI, design system', 'w'=>'92%', 'bar'=>'bg-indigo-500/70'],
              ['name'=>'MySQL', 'desc'=>'Migration, relasi tabel, query, optimasi', 'w'=>'78%', 'bar'=>'bg-emerald-500/60'],
              ['name'=>'UI/UX', 'desc'=>'Hierarchy, spacing, consistency, interaction', 'w'=>'82%', 'bar'=>'bg-pink-500/60'],
            ];
          @endphp

          @foreach($skills as $s)
            <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
              <p class="text-sm font-semibold text-white">{{ $s['name'] }}</p>
              <p class="text-xs text-slate-300 mt-2">{{ $s['desc'] }}</p>
              <div class="mt-4 h-2 rounded-full bg-white/10 overflow-hidden">
                <div class="h-full {{ $s['bar'] }}" style="width: {{ $s['w'] }}"></div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      {{-- CTA --}}
      <div class="wc-card p-6">
        <h2 class="text-2xl font-bold">Contact / Work</h2>
        <p class="text-slate-300 text-sm mt-2">
          Mau bikin portfolio, company profile, atau dashboard admin? Gas!
        </p>

        <div class="mt-6 space-y-3">
          <a href="{{ route('project') }}" class="wc-btn w-full">Browse Portfolio</a>

          <a href="{{ route('blog') }}"
             class="inline-flex w-full items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 font-semibold text-white hover:bg-white/10 transition">
            Baca Blog
          </a>

          <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-sm text-slate-200">
            <p class="font-semibold text-white">Tips cepat</p>
            <p class="text-slate-300 mt-1">Project publik hanya yang <b>Published</b>.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- FEATURE GRID (RAME) --}}
  <section class="max-w-7xl mx-auto px-5 sm:px-8 py-10">
    <div class="flex items-end justify-between gap-4">
      <div>
        <h2 class="text-2xl font-bold">Winky Portfolio System</h2>
        <p class="text-slate-300 text-sm mt-2">Public showcase + Owner dashboard untuk kelola konten.</p>
      </div>
      <a href="{{ route('project') }}" class="hidden sm:inline wc-link">Open /project →</a>
    </div>

    <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="wc-card p-6">
        <p class="text-xs text-violet-300">Public</p>
        <h3 class="mt-2 font-bold">Project Showcase</h3>
        <p class="mt-2 text-sm text-slate-300">Tampil elegan dan cepat, cocok untuk portfolio.</p>
      </div>

      <div class="wc-card p-6">
        <p class="text-xs text-indigo-300">Admin</p>
        <h3 class="mt-2 font-bold">CRUD Project</h3>
        <p class="mt-2 text-sm text-slate-300">Tambah/edit/hapus serta publish/unpublish.</p>
      </div>

      <div class="wc-card p-6">
        <p class="text-xs text-emerald-300">Security</p>
        <h3 class="mt-2 font-bold">Owner Only</h3>
        <p class="mt-2 text-sm text-slate-300">Hanya owner yang bisa masuk dashboard.</p>
      </div>

      <div class="wc-card p-6">
        <p class="text-xs text-pink-300">Design</p>
        <h3 class="mt-2 font-bold">Purple Neon</h3>
        <p class="mt-2 text-sm text-slate-300">Glass + gradient yang konsisten di semua halaman.</p>
      </div>
    </div>
  </section>

  {{-- FOOTER --}}
  <footer class="max-w-7xl mx-auto px-5 sm:px-8 pb-10">
    <div class="h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
    <div class="pt-6 text-center text-slate-400 text-sm">
      © {{ date('Y') }} <span class="text-violet-300 font-semibold">Winky Creative</span>. All Rights Reserved.
    </div>
  </footer>
@endsection
