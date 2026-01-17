<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Blog — Winky Tio Pratama</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#070711] text-slate-100">

  <!-- BACKGROUND GLOW -->
  <div class="fixed inset-0 -z-10">
    <div class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-violet-600/30 rounded-full blur-[140px]"></div>
    <div class="absolute -bottom-40 -right-40 w-[500px] h-[500px] bg-indigo-600/20 rounded-full blur-[140px]"></div>
  </div>

  <!-- NAVBAR -->
  <nav class="flex items-center justify-between px-12 py-6">
    <h1 class="text-xl font-bold text-violet-400">WinkyCreative</h1>

    <ul class="hidden md:flex gap-10 text-slate-300">
      <li class="hover:text-white"><a href="{{ route('welcome') }}">Home</a></li>
      <li class="hover:text-white"><a href="{{ route('about') }}">About</a></li>
      <li class="hover:text-white"><a href="{{ route('project') }}">Project</a></li>
      <li class="text-white font-semibold"><a href="{{ route('blog') }}">Blog</a></li>
    </ul>

    <a href="{{ route('welcome') }}"
       class="border border-violet-500/40 hover:bg-violet-600/20 px-5 py-2 rounded-lg text-sm transition">
      Back
    </a>
  </nav>

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

  <!-- FOOTER -->
  <footer class="border-t border-white/10 py-6 text-center text-slate-500 text-sm">
    © 2026 <span class="text-violet-400">Winky Tio Pratama</span>. All Rights Reserved.
  </footer>

</body>
</html>
