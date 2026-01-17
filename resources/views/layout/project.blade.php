<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Projects — Winky Tio Pratama</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}

@keyframes blink {
  0%, 90%, 100% { transform: scaleY(1); }
  95% { transform: scaleY(0.1); }
}

.animate-float {
  animation: float 4s ease-in-out infinite;
}

.animate-blink {
  animation: blink 4s infinite;
}



</style>

</head>

<body class="min-h-screen bg-[#070711] text-slate-100">

  <!-- BACKGROUND GLOW -->
  <div class="fixed inset-0 -z-10">
    <div class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-violet-600/30 rounded-full blur-[140px]"></div>
    <div class="absolute -bottom-40 -right-40 w-[500px] h-[500px] bg-indigo-600/20 rounded-full blur-[140px]"></div>
  </div>
  
  <!-- ROBOT BACKGROUND -->
<div class="fixed bottom-10 right-10 z-10 pointer-events-none">

  <div class="robot flex flex-col items-center gap-3">

    <!-- ROBOT HEAD -->
    <div class="relative w-20 h-20 rounded-2xl bg-gradient-to-br from-violet-500 to-indigo-500
                shadow-lg shadow-violet-500/40 animate-float">

      <!-- EYES -->
      <div class="absolute top-7 left-4 w-3 h-3 bg-white rounded-full animate-blink"></div>
      <div class="absolute top-7 right-4 w-3 h-3 bg-white rounded-full animate-blink"></div>

      <!-- ANTENNA -->
      <div class="absolute -top-3 left-1/2 -translate-x-1/2 w-1 h-3 bg-violet-400"></div>
      <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-3 h-3 bg-violet-500 rounded-full"></div>
    </div>

    <!-- BODY -->
    <div class="w-16 h-10 rounded-xl bg-violet-500/80"></div>

    <!-- MESSAGE -->
    <div class="px-4 py-2 text-sm rounded-xl bg-black/60 backdrop-blur
                border border-violet-500/30 text-white shadow-lg">
      Selamat datang di Project Winky ya,
      <span class="font-semibold text-violet-400">
        {{ auth()->user()->name ?? 'Guest' }}
      </span>
    </div>

  </div>
</div>


  <!-- NAVBAR -->
  <nav class="flex items-center justify-between px-12 py-6">
    <h1 class="text-xl font-bold text-violet-400">WinkyCreative</h1>

    <ul class="hidden md:flex gap-10 text-slate-300">
      <li class="hover:text-white"><a href="{{ route('welcome') }}">Home</a></li>
      <li class="hover:text-white"><a href="{{ route('about') }}">About</a></li>
      <li class="text-white font-semibold"><a href="{{ route('project') }}">Project</a></li>
      <li class="hover:text-white"><a href="{{ route('blog') }}">Blog</a></li>
    </ul>

    <a href="{{ route('welcome') }}"
       class="border border-violet-500/40 hover:bg-violet-600/20 px-5 py-2 rounded-lg text-sm transition">
      Back
    </a>
  </nav>

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

    <!-- ITEM 1 -->
    <div class="relative grid md:grid-cols-2 gap-12 mb-24">
      <div class="md:text-right">
        <div class="inline-block rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6">
          <span class="text-xs text-violet-400 uppercase">First Step</span>
          <h3 class="mt-2 text-xl font-bold">Landing Page Pertama</h3>
          <p class="mt-3 text-slate-400 text-sm">
            Project awal saya mengenal HTML, CSS, dan dasar UI modern.
          </p>
          <p class="mt-3 text-xs text-slate-500">Tech: HTML • CSS</p>
        </div>
      </div>

      <div class="relative">
        <span class="absolute left-1/2 top-6 -translate-x-1/2 w-5 h-5 bg-violet-500 rounded-full shadow-lg shadow-violet-500/50"></span>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div class="relative grid md:grid-cols-2 gap-12 mb-24">
      <div class="relative order-2 md:order-1">
        <span class="absolute left-1/2 top-6 -translate-x-1/2 w-5 h-5 bg-indigo-500 rounded-full shadow-lg shadow-indigo-500/50"></span>
      </div>

      <div>
        <div class="inline-block rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6">
          <span class="text-xs text-indigo-400 uppercase">Growth</span>
          <h3 class="mt-2 text-xl font-bold">Website Sekolah</h3>
          <p class="mt-3 text-slate-400 text-sm">
            Website informasi sekolah dengan struktur rapi dan responsif.
          </p>
          <p class="mt-3 text-xs text-slate-500">Tech: Tailwind CSS • JS</p>
        </div>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div class="relative grid md:grid-cols-2 gap-12 mb-24">
      <div class="md:text-right">
        <div class="inline-block rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6">
          <span class="text-xs text-pink-400 uppercase">Backend Start</span>
          <h3 class="mt-2 text-xl font-bold">Laravel CRUD App</h3>
          <p class="mt-3 text-slate-400 text-sm">
            Project Laravel pertama: routing, controller, database, blade.
          </p>
          <p class="mt-3 text-xs text-slate-500">Tech: Laravel • MySQL</p>
        </div>
      </div>

      <div class="relative">
        <span class="absolute left-1/2 top-6 -translate-x-1/2 w-5 h-5 bg-pink-500 rounded-full shadow-lg shadow-pink-500/50"></span>
      </div>
    </div>

    <!-- ITEM 4 -->
    <div class="relative grid md:grid-cols-2 gap-12 mb-24">
      <div class="relative order-2 md:order-1">
        <span class="absolute left-1/2 top-6 -translate-x-1/2 w-5 h-5 bg-emerald-500 rounded-full shadow-lg shadow-emerald-500/50"></span>
      </div>

      <div>
        <div class="inline-block rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl p-6">
          <span class="text-xs text-emerald-400 uppercase">Exploration</span>
          <h3 class="mt-2 text-xl font-bold">Dashboard Admin</h3>
          <p class="mt-3 text-slate-400 text-sm">
            UI dashboard modern untuk mengelola data dan laporan.
          </p>
          <p class="mt-3 text-xs text-slate-500">Tech: Tailwind • Chart • JS</p>
        </div>
      </div>
    </div>

    <!-- END -->
    <div class="text-center mt-32">
      <span class="inline-block px-6 py-3 rounded-full bg-gradient-to-r from-violet-500 to-indigo-500 text-sm font-semibold shadow-lg shadow-violet-500/40">
        Journey Continues 🚀
      </span>
    </div>

  </section>

  <!-- FOOTER -->
  <footer class="border-t border-white/10 py-6 text-center text-slate-500 text-sm">
    © 2026 <span class="text-violet-400">Winky Tio Pratama</span>. All Rights Reserved.
  </footer>

</body>
</html>
