<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectPublicController;
use App\Http\Controllers\Dashboard\ProjectController;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/blog', 'pages.blog')->name('blog');

// Public projects page (dinamis dari DB)
Route::get('/project', [ProjectPublicController::class, 'index'])
    ->name('project.index');

/*
|--------------------------------------------------------------------------
| Dashboard (Auth)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('/dashboard/projects', ProjectController::class)
        ->names('dashboard.projects');
});

require __DIR__ . '/auth.php';

require __DIR__ . '/profile.php';
