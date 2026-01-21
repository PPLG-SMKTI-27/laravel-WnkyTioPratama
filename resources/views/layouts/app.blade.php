<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Winky Creative')</title>

    {{-- Laravel + Breeze + Tailwind (Vite) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-[#070711] text-slate-100">

    {{-- BACKGROUND EFFECT --}}
    <div class="fixed inset-0 -z-10">
        <div class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-violet-600/30 rounded-full blur-[140px]"></div>
        <div class="absolute -bottom-40 -right-40 w-[500px] h-[500px] bg-indigo-600/20 rounded-full blur-[140px]"></div>
    </div>

    {{-- NAVBAR --}}
    @include('layouts.navigation')

    {{-- MAIN CONTENT --}}
    <main class="flex-1">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="px-6 md:px-12 py-8 text-center text-slate-500 text-sm border-t border-white/10">
        © {{ date('Y') }} Winky Tio Pratama
    </footer>

    {{-- PAGE SPECIFIC SCRIPT --}}
    @stack('scripts')

</body>
</html>
