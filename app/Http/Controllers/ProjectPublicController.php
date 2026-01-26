<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectPublicController extends Controller
{
    public function index()
    {
        $projects = Project::published()
            ->orderBy('sort_order')
            ->latest()
            ->get();

        return view('pages.project', compact('projects'));
    }
}
