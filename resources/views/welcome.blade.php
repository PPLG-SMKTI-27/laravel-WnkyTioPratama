<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portofolio Winky Tio Pratama</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col bg-[#070711] text-slate-100">

<!-- BACKGROUND -->
<div class="fixed inset-0 -z-10">
  <div class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-violet-600/30 rounded-full blur-[140px]"></div>
  <div class="absolute -bottom-40 -right-40 w-[500px] h-[500px] bg-indigo-600/20 rounded-full blur-[140px]"></div>
</div>

<!-- NAVBAR -->
<nav class="flex items-center justify-between px-6 md:px-12 py-6">
  <h1 class="text-xl font-bold text-violet-400">WinkyCreative</h1>

  <ul class="hidden md:flex gap-8 items-center text-slate-300">
    <li><a href="{{ route('welcome') }}" class="hover:text-white">Home</a></li>
    <li><a href="{{ route('about') }}" class="hover:text-white">About</a></li>
    <li><a href="{{ route('blog') }}" class="hover:text-white">Blog</a></li>

    @auth
      <li>
        <a href="{{ route('project') }}" class="text-violet-400 font-semibold hover:text-violet-300">
          Project
        </a>
      </li>

      <li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="border border-red-500/40 px-4 py-2 rounded-lg hover:bg-red-500/20 transition">
            Logout
          </button>
        </form>
      </li>
    @endauth

    @guest
      <li>
        <a href="{{ route('login') }}"
           class="border border-violet-500/40 px-4 py-2 rounded-lg hover:bg-violet-600/20 transition">
          Login
        </a>
      </li>
      <li>
        <a href="{{ route('register') }}"
           class="bg-violet-600 px-4 py-2 rounded-lg hover:bg-violet-700 transition">
          Register
        </a>
      </li>
    @endguest

    <li>
      <a href="#contact"
         class="bg-violet-600 hover:bg-violet-700 px-5 py-2 rounded-lg shadow-lg shadow-violet-600/30">
        Contact Me
      </a>
    </li>
  </ul>
</nav>

<!-- HERO -->
<main class="flex-1 px-6 md:px-12 py-16 grid md:grid-cols-2 gap-16 items-center">

<!-- LEFT -->
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

<!-- RIGHT / PORTFOLIO -->
<div class="relative">
  <div class="absolute inset-0 bg-gradient-to-tr from-violet-600/30 to-transparent rounded-3xl blur-2xl"></div>

  <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-6 shadow-2xl">

    <h3 class="text-center text-2xl font-bold mb-6">PORTFOLIO PREVIEW</h3>

    <!-- CARD PREVIEW -->
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

    <!-- SLIDER -->
    <div class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl overflow-hidden border border-white/10">

      <div class="relative h-[300px] flex items-center justify-center">
        <img
          id="sliderImage"
          class="max-h-full max-w-full object-contain transition-all duration-500"
          alt="Portfolio Preview"
        />
      </div>

      <button onclick="prevSlide()"
        class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/70 w-10 h-10 rounded-full text-xl">
        ‹
      </button>

      <button onclick="nextSlide()"
        class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/70 w-10 h-10 rounded-full text-xl">
        ›
      </button>

      <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2" id="sliderIndicators"></div>
    </div>

    <!-- THUMBNAILS -->
    <div class="mt-4 grid grid-cols-4 gap-2" id="thumbnailContainer"></div>

  </div>
</div>

</main>

<footer class="px-6 md:px-12 py-8 text-center text-slate-500 text-sm border-t border-white/10">
  © 2024 Winky Tio Pratama
</footer>

<script src="/js/slider.js"></script>
</body>
</html>
