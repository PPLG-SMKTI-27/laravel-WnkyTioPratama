<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    // ⭐ INI YANG PALING PENTING
    public function project()
    {
        $projects = Project::where('is_published', true)
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->get();

        return view('pages.project', compact('projects'));
    }
}
