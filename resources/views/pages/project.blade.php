@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="px-6 py-10 text-white">
  <div class="max-w-6xl mx-auto">
    <div class="flex items-end justify-between gap-4">
      <div>
        <h1 class="text-3xl font-bold">Projects</h1>
        <p class="text-slate-300 mt-2">Yang tampil di sini hanya project yang sudah <b>Published</b>.</p>
      </div>
    </div>

    @if($projects->isEmpty())
      <div class="mt-8 rounded-xl border border-white/10 bg-white/5 p-6 text-slate-300">
        Belum ada project yang published.
      </div>
    @else
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        @foreach($projects as $p)
          <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
            <h2 class="text-lg font-semibold">{{ $p->title }}</h2>
            @if($p->excerpt)
              <p class="mt-2 text-sm text-slate-300">{{ $p->excerpt }}</p>
            @endif

            <div class="mt-4 flex flex-wrap gap-3 text-sm">
              @if($p->demo_url)
                <a class="text-indigo-200 hover:underline" href="{{ $p->demo_url }}" target="_blank" rel="noreferrer">Demo</a>
              @endif
              @if($p->repo_url)
                <a class="text-indigo-200 hover:underline" href="{{ $p->repo_url }}" target="_blank" rel="noreferrer">Repo</a>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</div>
@endsection
