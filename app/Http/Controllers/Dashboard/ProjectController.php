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
        $projects = Project::orderBy('sort_order')->orderByDesc('id')->get();
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
            'slug' => ['nullable','string','max:255'],
            'excerpt' => ['nullable','string'],
            'demo_url' => ['nullable','url','max:255'],
            'repo_url' => ['nullable','url','max:255'],
            'is_published' => ['nullable','boolean'],
        ]);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['is_published'] = $request->boolean('is_published');

        Project::create($data);

        return redirect()->route('dashboard.projects.index')->with('status', 'Project created!');
    }

    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'slug' => ['nullable','string','max:255'],
            'excerpt' => ['nullable','string'],
            'demo_url' => ['nullable','url','max:255'],
            'repo_url' => ['nullable','url','max:255'],
            'is_published' => ['nullable','boolean'],
        ]);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['is_published'] = $request->boolean('is_published');

        $project->update($data);

        return redirect()->route('dashboard.projects.index')->with('status', 'Project updated!');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('dashboard.projects.index')->with('status', 'Project deleted!');
    }
}
