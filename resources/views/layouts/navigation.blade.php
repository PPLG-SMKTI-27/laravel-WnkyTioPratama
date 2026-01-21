<nav class="flex items-center justify-between px-6 md:px-12 py-6">
    <h1 class="text-xl font-bold text-violet-400">
        <a href="{{ route('welcome') }}">WinkyCreative</a>
    </h1>

    <ul class="hidden md:flex gap-8 items-center text-slate-300">

        <li>
            <a href="{{ route('welcome') }}" class="hover:text-white">
                Home
            </a>
        </li>

        <li>
            <a href="{{ route('about') }}" class="hover:text-white">
                About
            </a>
        </li>

        <li>
            <a href="{{ route('blog') }}" class="hover:text-white">
                Blog
            </a>
        </li>

        @auth
            <li>
                <a href="{{ route('project') }}"
                   class="text-violet-400 font-semibold hover:text-violet-300">
                    Project
                </a>
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        type="submit"
                        class="border border-red-500/40 px-4 py-2 rounded-lg hover:bg-red-500/20 transition">
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
    </ul>
</nav>
