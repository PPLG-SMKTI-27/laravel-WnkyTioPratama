@php
    $isOwner = auth()->check() && auth()->user()->email === config('app.owner_email');
@endphp

<nav class="bg-indigo-600/70 backdrop-blur p-4 flex justify-between items-center border-b border-white/10 sticky top-0 z-50">
    <a href="{{ route('home') }}" class="font-bold text-white">Winky Creative</a>

    <ul class="flex gap-6 items-center">
        <li><a href="{{ route('home') }}" class="hover:text-indigo-200">Home</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-indigo-200">About</a></li>
        <li><a href="{{ route('blog') }}" class="hover:text-indigo-200">Blog</a></li>
        <li><a href="{{ route('project.index') }}" class="hover:text-indigo-200">Project</a></li>

        @auth
            @if($isOwner)
                <li>
                    <a href="{{ route('dashboard') }}" class="hover:text-indigo-200">
                        Dashboard
                    </a>
                </li>
            @endif

            <!-- <li>
            </li> -->

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:text-indigo-200">
                        Logout
                    </button>
                </form>
            </li>
        @endauth

        @guest
            <li><a href="{{ route('login') }}" class="hover:text-indigo-200">Login</a></li>
            {{-- Register disabled --}}
        @endguest
    </ul>
</nav>
