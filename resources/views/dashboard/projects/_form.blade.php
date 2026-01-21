@php
  // helper kecil biar aman kalau $project null (create)
  $val = function ($key, $default = '') use ($project) {
      return old($key, $project?->$key ?? $default);
  };
@endphp

@if ($errors->any())
  <div class="mb-4 rounded-2xl border border-red-500/20 bg-red-500/10 p-4 text-sm text-red-200">
    <p class="font-semibold mb-2">Ada error:</p>
    <ul class="list-disc pl-5 space-y-1">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ $action }}" class="space-y-5">
  @csrf
  @if($method !== 'POST')
    @method($method)
  @endif

  {{-- Title --}}
  <div>
    <label class="block text-sm text-slate-300 mb-2">Title</label>
    <input
      type="text"
      name="title"
      value="{{ $val('title') }}"
      class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-violet-500/40"
      placeholder="contoh: Portfolio Laravel CRUD"
      required
    />
  </div>

  {{-- Slug --}}
  <div>
    <label class="block text-sm text-slate-300 mb-2">Slug (optional)</label>
    <input
      type="text"
      name="slug"
      value="{{ $val('slug') }}"
      class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-violet-500/40"
      placeholder="contoh: portfolio-laravel-crud"
    />
    <p class="text-xs text-slate-400 mt-2">
      Kalau kosong, slug bisa kamu generate dari title di controller.
    </p>
  </div>

  {{-- Excerpt --}}
  <div>
    <label class="block text-sm text-slate-300 mb-2">Excerpt (optional)</label>
    <textarea
      name="excerpt"
      rows="4"
      class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-violet-500/40"
      placeholder="Deskripsi singkat project..."
    >{{ $val('excerpt') }}</textarea>
  </div>

  {{-- URLs --}}
  <div class="grid sm:grid-cols-2 gap-4">
    <div>
      <label class="block text-sm text-slate-300 mb-2">Demo URL (optional)</label>
      <input
        type="url"
        name="demo_url"
        value="{{ $val('demo_url') }}"
        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-violet-500/40"
        placeholder="https://example.com"
      />
    </div>

    <div>
      <label class="block text-sm text-slate-300 mb-2">Repo URL (optional)</label>
      <input
        type="url"
        name="repo_url"
        value="{{ $val('repo_url') }}"
        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-violet-500/40"
        placeholder="https://github.com/username/repo"
      />
    </div>
  </div>

  {{-- Sort + Published --}}
  <div class="grid sm:grid-cols-2 gap-4 items-center">
    <div>
      <label class="block text-sm text-slate-300 mb-2">Sort Order</label>
      <input
        type="number"
        name="sort_order"
        value="{{ $val('sort_order', 0) }}"
        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-violet-500/40"
        min="0"
      />
    </div>

    <label class="inline-flex items-center gap-3 mt-6 sm:mt-8">
      <input
        type="checkbox"
        name="is_published"
        value="1"
        class="h-4 w-4 rounded border-white/20 bg-white/5 text-violet-500 focus:ring-violet-500/40"
        {{ $val('is_published', true) ? 'checked' : '' }}
      />
      <span class="text-sm text-slate-200">Published</span>
    </label>
  </div>

  {{-- ACTIONS (INI TOMBOL SAVE) --}}
  <div class="pt-3 flex flex-wrap gap-3">
    <button type="submit" class="wc-btn">
      Save
    </button>

    <a href="{{ route('dashboard.projects.index') }}"
       class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 font-semibold text-white hover:bg-white/10 transition">
      Cancel
    </a>
  </div>
</form>
