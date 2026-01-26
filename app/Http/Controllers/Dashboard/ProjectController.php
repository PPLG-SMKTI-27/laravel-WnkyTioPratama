<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('sort_order')->latest()->paginate(10);
        return view('dashboard.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'slug' => ['nullable','string','max:255','unique:projects,slug'],
            'excerpt' => ['nullable','string'],
            'demo_url' => ['nullable','url','max:255'],
            'repo_url' => ['nullable','url','max:255'],
            'sort_order' => ['nullable','integer','min:0'],
            'is_published' => ['nullable'],
        ]);

        $data['slug'] = filled($data['slug'] ?? null)
            ? Str::slug($data['slug'])
            : Str::slug($data['title']);

        $data['is_published'] = $request->boolean('is_published');
        $data['sort_order'] = (int)($data['sort_order'] ?? 0);

        $base = $data['slug'];
        $i = 2;
        while (Project::where('slug', $data['slug'])->exists()) {
            $data['slug'] = $base . '-' . $i;
            $i++;
        }

        $project = Project::create($data);

        return redirect()
            ->route('dashboard.projects.edit', $project)
            ->with('success', 'Project berhasil dibuat.');
    }

    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'slug' => ['nullable','string','max:255','unique:projects,slug,'.$project->id],
            'excerpt' => ['nullable','string'],
            'demo_url' => ['nullable','url','max:255'],
            'repo_url' => ['nullable','url','max:255'],
            'sort_order' => ['nullable','integer','min:0'],
            'is_published' => ['nullable'],
        ]);

        $data['slug'] = filled($data['slug'] ?? null)
            ? Str::slug($data['slug'])
            : Str::slug($data['title']);

        $data['is_published'] = $request->boolean('is_published');
        $data['sort_order'] = (int)($data['sort_order'] ?? 0);

        $base = $data['slug'];
        $i = 2;
        while (Project::where('slug', $data['slug'])->where('id','!=',$project->id)->exists()) {
            $data['slug'] = $base . '-' . $i;
            $i++;
        }

        $project->update($data);

        return back()->with('success', 'Project berhasil diupdate.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('success', 'Project berhasil dihapus.');
    }
}
