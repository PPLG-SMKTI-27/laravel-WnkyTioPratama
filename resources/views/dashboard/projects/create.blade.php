@extends('layouts.dashboard')

@section('title', 'New Project')

@section('content')
  <div class="max-w-3xl mx-auto">
    <div class="wc-card p-6 sm:p-8">
      <h1 class="text-2xl font-bold">New Project</h1>
      <p class="text-slate-300 mt-1">Tambah project baru untuk portfolio.</p>

      <div class="mt-6">
        @include('dashboard.projects._form', [
          'action' => route('dashboard.projects.store'),
          'method' => 'POST',
          'project' => null,
        ])
      </div>
    </div>
  </div>
@endsection
