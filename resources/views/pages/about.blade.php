<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>About — Winky Tio Pratama</title>
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
      <li class="text-white font-semibold"><a href="{{ route('about') }}">About</a></li>
      <li class="hover:text-white"><a href="{{ route('project') }}">Project</a></li>
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
      About
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-indigo-400">
        Me
      </span>

  </section>

  <!-- CONTENT -->
  <section class="px-12 pb-24 grid gap-16 max-w-6xl mx-auto">

    <!-- PROFILE -->
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div class="space-y-6">
        <h3 class="text-2xl font-bold text-violet-400">Siapa Saya?</h3>
        <p class="text-slate-300 leading-relaxed">
          Nama saya <span class="text-white font-semibold">Winky Tio Pratama</span>.
          Saya adalah seorang pelajar kelas
          <span class="text-white">XI PPLG</span> di
          <span class="text-white">SMK TI Airlangga</span>.
          Saya memiliki ketertarikan besar pada dunia teknologi,
          khususnya pengembangan website modern dan sistem berbasis web.
        </p>

        <p class="text-slate-400 leading-relaxed">
          Sebelum bersekolah di SMK TI Airlangga, saya merupakan lulusan dari
          <span class="text-white">SMPN 001 Dempar</span>.
          Sejak saat itu, saya mulai serius mendalami dunia IT
          dan terus mengembangkan skill saya hingga sekarang.
        </p>
      </div>

      <div class="rounded-3xl bg-white/5 border border-white/10 p-8 backdrop-blur-xl">
        <ul class="space-y-4 text-slate-300">
          <li><span class="text-violet-400">Nama:</span> Winky Tio Pratama</li>
          <li><span class="text-violet-400">Sekolah:</span> SMK TI Airlangga</li>
          <li><span class="text-violet-400">Kelas:</span> XI PPLG</li>
          <li><span class="text-violet-400">Bidang:</span> Full Stack Developer</li>
        </ul>
      </div>
    </div>

    <!-- SKILL & TECH -->
    <div>
      <h3 class="text-2xl font-bold text-violet-400 mb-8">Skill & Teknologi</h3>

      <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
        <div class="rounded-xl bg-slate-800/70 border border-white/10 p-5">
          <h4 class="font-semibold mb-2">Frontend</h4>
          <p class="text-sm text-slate-400">HTML, CSS, JavaScript, Tailwind CSS</p>
        </div>

        <div class="rounded-xl bg-slate-800/70 border border-white/10 p-5">
          <h4 class="font-semibold mb-2">Backend</h4>
          <p class="text-sm text-slate-400">Laravel, Flask, PHP, Python</p>
        </div>

        <div class="rounded-xl bg-slate-800/70 border border-white/10 p-5">
          <h4 class="font-semibold mb-2">Database</h4>
          <p class="text-sm text-slate-400">MySQL, SQLite</p>
        </div>

        <div class="rounded-xl bg-slate-800/70 border border-white/10 p-5">
          <h4 class="font-semibold mb-2">Tools</h4>
          <p class="text-sm text-slate-400">Git, GitHub, VS Code</p>
        </div>
      </div>
    </div>

    <!-- MUSIC -->
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div class="rounded-3xl bg-white/5 border border-white/10 p-8">
        <h3 class="text-2xl font-bold text-violet-400 mb-4">Musik & Pelayanan</h3>
        <p class="text-slate-300 leading-relaxed">
          Selain dunia teknologi, saya juga aktif sebagai
          <span class="text-white">pemusik di band gereja</span>.
          Musik mengajarkan saya tentang kerja tim, konsistensi,
          dan bagaimana menyampaikan pesan melalui harmoni.
        </p>
      </div>

      <div class="space-y-4 text-slate-400">
        <p>
          Perpaduan antara teknologi dan musik membentuk cara saya berpikir:
          kreatif, terstruktur, dan selalu mencari solusi yang elegan.
        </p>
        <p>
          Nilai-nilai ini saya terapkan juga dalam setiap project yang saya kerjakan
          sebagai seorang developer.
        </p>
      </div>
    </div>

    <!-- JOURNEY -->
    <div class="rounded-3xl bg-gradient-to-r from-violet-600/20 to-indigo-600/10 border border-white/10 p-10 text-center">
      <h3 class="text-2xl font-bold mb-4">Perjalanan Saya</h3>
      <p class="text-slate-300 max-w-3xl mx-auto leading-relaxed">
        Saya percaya bahwa proses belajar tidak pernah berhenti.
        Saat ini saya terus mengasah kemampuan sebagai
        <span class="text-white font-semibold">Full Stack Developer</span>,
        membangun project, belajar dari kesalahan,
        dan mempersiapkan diri untuk masa depan di dunia teknologi.
      </p>
    </div>

  </section>

  <!-- FOOTER -->
  <footer class="border-t border-white/10 py-6 text-center text-slate-500 text-sm">
    © 2026 <span class="text-violet-400">Winky Tio Pratama</span>. All Rights Reserved.
  </footer>

</body>
</html>
