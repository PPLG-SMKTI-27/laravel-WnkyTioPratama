<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Dashboard') - {{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="wc-bg">
    {{-- Topbar --}}
    <header class="bg-indigo-600/70 backdrop-blur border-b border-white/10 sticky top-0 z-50">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-3 flex items-center justify-between">

            {{-- Brand + Desktop nav --}}
            <div class="flex items-center gap-4">
                <a href="{{ route('dashboard.index') }}" class="font-bold text-white">
                    Winky Creative
                </a>

                {{-- Desktop nav (cuma Dashboard) --}}
                <nav class="hidden md:flex items-center gap-4 text-sm text-white/80">
                    <a href="{{ route('dashboard.index') }}" class="hover:text-indigo-200">
                        Dashboard
                    </a>
                </nav>
            </div>

            {{-- Right actions (desktop) --}}
            <div class="hidden md:flex items-center gap-4 text-sm text-white/80">
                <a href="{{ route('project') }}" class="hover:text-indigo-200">
                    View site →
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:text-indigo-200">
                        Logout
                    </button>
                </form>
            </div>

            {{-- Mobile menu button --}}
            <button
                type="button"
                class="md:hidden inline-flex items-center justify-center rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-white"
                onclick="document.getElementById('mobileMenu').classList.toggle('hidden')"
                aria-label="Toggle menu"
            >
                ☰
            </button>
        </div>

        {{-- Mobile dropdown menu --}}
        <div id="mobileMenu" class="md:hidden hidden border-t border-white/10 bg-indigo-600/50 backdrop-blur">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-3 space-y-2 text-sm text-white/90">
                <a href="{{ route('dashboard.index') }}" class="block rounded-lg px-3 py-2 hover:bg-white/10">
                    Dashboard
                </a>

                <a href="{{ route('dashboard.projects.index') }}" class="block rounded-lg px-3 py-2 hover:bg-white/10">
                    Manage Projects
                </a>

                <a href="{{ route('dashboard.projects.create') }}" class="block rounded-lg px-3 py-2 hover:bg-white/10">
                    + New Project
                </a>

                <a href="{{ route('project') }}" class="block rounded-lg px-3 py-2 hover:bg-white/10">
                    View site →
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left rounded-lg px-3 py-2 hover:bg-white/10">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    {{-- Content --}}
    <main class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>
</body>
</html>
