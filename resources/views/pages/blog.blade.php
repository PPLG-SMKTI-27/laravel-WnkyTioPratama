@extends('layouts.app')

@section('title', 'Blog')

@section('content')
  <!-- HEADER -->
  <section class="px-12 pt-16 pb-20 text-center">
    <h2 class="text-4xl md:text-5xl font-extrabold">
      My
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-indigo-400">
        Blog
      </span>
    </h2>

    <p class="mt-6 text-slate-400 max-w-2xl mx-auto leading-relaxed">
      Catatan perjalanan saya sebagai pelajar PPLG, full stack developer,
      dan pembelajar di dunia teknologi.
    </p>
  </section>

  <!-- BLOG GRID -->
  <section class="px-12 pb-24 max-w-7xl mx-auto">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- CARD -->
      <div class="rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6 hover:-translate-y-1 transition">
        <span class="text-xs text-violet-400 uppercase tracking-wider">Journey</span>
        <h3 class="mt-3 text-xl font-bold">Belajar Laravel dari Nol</h3>
        <p class="mt-3 text-slate-400 text-sm leading-relaxed">
          Cerita awal saya mengenal Laravel, mulai dari routing,
          controller, hingga blade template.
        </p>
        <a href="#" class="inline-block mt-5 text-sm text-violet-400 hover:text-violet-300">
          Read More →
        </a>
      </div>

      <div class="rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6 hover:-translate-y-1 transition">
        <span class="text-xs text-indigo-400 uppercase tracking-wider">Tech</span>
        <h3 class="mt-3 text-xl font-bold">Mengenal Tailwind CSS</h3>
        <p class="mt-3 text-slate-400 text-sm leading-relaxed">
          Kenapa Tailwind bikin ngoding UI lebih cepat,
          rapi, dan konsisten.
        </p>
        <a href="#" class="inline-block mt-5 text-sm text-violet-400 hover:text-violet-300">
          Read More →
        </a>
      </div>

      <div class="rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6 hover:-translate-y-1 transition">
        <span class="text-xs text-pink-400 uppercase tracking-wider">School</span>
        <h3 class="mt-3 text-xl font-bold">Hidup Sebagai Anak PPLG</h3>
        <p class="mt-3 text-slate-400 text-sm leading-relaxed">
          Cerita keseharian saya sebagai siswa PPLG di SMK TI Airlangga.
        </p>
        <a href="#" class="inline-block mt-5 text-sm text-violet-400 hover:text-violet-300">
          Read More →
        </a>
      </div>

      <div class="rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6 hover:-translate-y-1 transition">
        <span class="text-xs text-emerald-400 uppercase tracking-wider">Reflection</span>
        <h3 class="mt-3 text-xl font-bold">Coding & Musik</h3>
        <p class="mt-3 text-slate-400 text-sm leading-relaxed">
          Bagaimana dunia musik membantu saya berpikir
          lebih kreatif saat ngoding.
        </p>
        <a href="#" class="inline-block mt-5 text-sm text-violet-400 hover:text-violet-300">
          Read More →
        </a>
      </div>

      <div class="rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6 hover:-translate-y-1 transition">
        <span class="text-xs text-orange-400 uppercase tracking-wider">Tips</span>
        <h3 class="mt-3 text-xl font-bold">Kesalahan Umum Pemula</h3>
        <p class="mt-3 text-slate-400 text-sm leading-relaxed">
          Beberapa kesalahan yang sering saya lakukan
          saat belajar programming.
        </p>
        <a href="#" class="inline-block mt-5 text-sm text-violet-400 hover:text-violet-300">
          Read More →
        </a>
      </div>

      <div class="rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6 hover:-translate-y-1 transition">
        <span class="text-xs text-cyan-400 uppercase tracking-wider">Project</span>
        <h3 class="mt-3 text-xl font-bold">Project Pertama Saya</h3>
        <p class="mt-3 text-slate-400 text-sm leading-relaxed">
          Cerita membangun project website pertama
          dari nol hingga selesai.
        </p>
        <a href="#" class="inline-block mt-5 text-sm text-violet-400 hover:text-violet-300">
          Read More →
        </a>
      </div>

    </div>
  </section>



@endsection
