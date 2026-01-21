@extends('layouts.dashboard')

@section('title', 'Edit Project')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

  <div class="wc-card p-6">
    <div class="flex items-start justify-between gap-4">
      <div>
        <h1 class="text-2xl font-bold">Edit Project</h1>
        <p class="text-slate-300 mt-1">Ubah data project portfolio.</p>
      </div>

      <a href="{{ route('dashboard.projects.index') }}"
         class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 font-semibold text-white hover:bg-white/10 transition">
        ← Back
      </a>
    </div>
  </div>

  @if ($errors->any())
    <div class="wc-card p-5 border border-red-500/30 bg-red-500/10">
      <p class="font-semibold text-red-200 mb-2">Ada error:</p>
      <ul class="list-disc pl-5 text-sm text-red-100 space-y-1">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <div class="wc-card p-6">
    <form method="POST" action="{{ route('dashboard.projects.update', $project) }}" class="space-y-5">
      @csrf
      @method('PUT')

      @include('dashboard.projects._form', ['project' => $project])

      <div class="flex flex-wrap gap-3 pt-2">
        <button type="submit" class="wc-btn">Update</button>

        <a href="{{ route('dashboard.projects.index') }}"
           class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 font-semibold text-white hover:bg-white/10 transition">
          Cancel
        </a>
      </div>
    </form>
  </div>

</div>
@endsection
