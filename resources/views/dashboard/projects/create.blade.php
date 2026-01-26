@extends('layouts.dashboard')

@section('content')
<div class="p-6 text-white max-w-2xl">
  <div class="flex items-center justify-between">
    <h1 class="text-2xl font-bold">New Project</h1>
    <a href="{{ route('dashboard.projects.index') }}" class="text-indigo-200 hover:underline">← Back</a>
  </div>

  @if ($errors->any())
    <div class="mt-4 rounded-xl border border-red-500/30 bg-red-500/10 p-3 text-red-100">
      <ul class="list-disc pl-5">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form class="mt-6 space-y-4" method="POST" action="{{ route('dashboard.projects.store') }}">
    @csrf

    <div>
      <label class="block text-sm text-slate-300 mb-1">Title</label>
      <input name="title" value="{{ old('title') }}" class="w-full rounded-lg bg-white/5 border border-white/10 px-3 py-2" required>
    </div>

    <div>
      <label class="block text-sm text-slate-300 mb-1">Slug (optional)</label>
      <input name="slug" value="{{ old('slug') }}" class="w-full rounded-lg bg-white/5 border border-white/10 px-3 py-2">
    </div>

    <div>
      <label class="block text-sm text-slate-300 mb-1">Excerpt</label>
      <textarea name="excerpt" class="w-full rounded-lg bg-white/5 border border-white/10 px-3 py-2" rows="4">{{ old('excerpt') }}</textarea>
    </div>

    <div class="grid md:grid-cols-2 gap-4">
      <div>
        <label class="block text-sm text-slate-300 mb-1">Demo URL</label>
        <input name="demo_url" value="{{ old('demo_url') }}" class="w-full rounded-lg bg-white/5 border border-white/10 px-3 py-2">
      </div>
      <div>
        <label class="block text-sm text-slate-300 mb-1">Repo URL</label>
        <input name="repo_url" value="{{ old('repo_url') }}" class="w-full rounded-lg bg-white/5 border border-white/10 px-3 py-2">
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-4 items-center">
      <div>
        <label class="block text-sm text-slate-300 mb-1">Sort Order</label>
        <input type="number" name="sort_order" value="{{ old('sort_order', 0) }}" class="w-full rounded-lg bg-white/5 border border-white/10 px-3 py-2">
      </div>

      <label class="flex items-center gap-2 mt-6 md:mt-0">
        <input type="checkbox" name="is_published" value="1" class="rounded">
        <span class="text-slate-200">Published</span>
      </label>
    </div>

    <button class="rounded-xl bg-indigo-600 px-4 py-2 font-semibold hover:bg-indigo-500">Save</button>
  </form>
</div>
@endsection
