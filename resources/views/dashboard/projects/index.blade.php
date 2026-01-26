@extends('layouts.dashboard')

@section('content')
<div class="p-6 text-white">
  <div class="flex items-center justify-between">
    <div>
      <h1 class="text-2xl font-bold">Projects</h1>
      <p class="text-slate-300 text-sm">Manage project yang tampil di halaman publik.</p>
    </div>

    <a href="{{ route('dashboard.projects.create') }}"
       class="rounded-xl bg-indigo-600 px-4 py-2 font-semibold hover:bg-indigo-500">
      + New Project
    </a>
  </div>

  @if(session('success'))
    <div class="mt-4 rounded-xl border border-emerald-500/30 bg-emerald-500/10 p-3 text-emerald-100">
      {{ session('success') }}
    </div>
  @endif

  <div class="mt-6 overflow-x-auto rounded-xl border border-white/10">
    <table class="min-w-full text-sm">
      <thead class="bg-white/5 text-slate-200">
        <tr>
          <th class="px-4 py-3 text-left">Title</th>
          <th class="px-4 py-3 text-left">Slug</th>
          <th class="px-4 py-3 text-left">Published</th>
          <th class="px-4 py-3 text-left">Order</th>
          <th class="px-4 py-3 text-right">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($projects as $project)
          <tr class="border-t border-white/10">
            <td class="px-4 py-3 font-semibold">{{ $project->title }}</td>
            <td class="px-4 py-3 text-slate-300">{{ $project->slug }}</td>
            <td class="px-4 py-3">
              @if($project->is_published)
                <span class="rounded-full bg-emerald-500/15 px-2 py-1 text-emerald-200">Yes</span>
              @else
                <span class="rounded-full bg-slate-500/15 px-2 py-1 text-slate-200">No</span>
              @endif
            </td>
            <td class="px-4 py-3">{{ $project->sort_order }}</td>
            <td class="px-4 py-3 text-right space-x-2">
              <a href="{{ route('dashboard.projects.edit', $project) }}" class="text-indigo-200 hover:underline">Edit</a>
              <form action="{{ route('dashboard.projects.destroy', $project) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus project ini?')" class="text-red-200 hover:underline">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="px-4 py-6 text-slate-300">Belum ada project.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div class="mt-6">
    {{ $projects->links() }}
  </div>

  <div class="mt-8">
    <a href="{{ route('project.index') }}" class="text-indigo-200 hover:underline">Lihat halaman publik /project →</a>
  </div>
</div>
@endsection
