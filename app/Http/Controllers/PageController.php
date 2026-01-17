<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('layout.about');
    }

    public function blog()
    {
        return view('layout.blog');
    }

    public function project()
    {
        return view('layout.project');
    }
}
