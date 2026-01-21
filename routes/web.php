<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\ProjectController;

/*
|--------------------------------------------------------------------------
| Public Pages (BISA DIAKSES SEMUA ORANG)
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'home'])->name('app.home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

/*
|--------------------------------------------------------------------------
| Public Project Page (PORTOFOLIO)
|--------------------------------------------------------------------------
*/
Route::get('/project', [PageController::class, 'project'])->name('project');

/*
|--------------------------------------------------------------------------
| Dashboard (OWNER ONLY)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'owner'])->prefix('dashboard')->name('dashboard.')->group(function () {

    Route::get('/', function () {
        return view('dashboard.index');
    })->name('index');

    Route::resource('projects', ProjectController::class)->except(['show']);
});

/*
|--------------------------------------------------------------------------
| Profile (Breeze)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Auth Routes (Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';
