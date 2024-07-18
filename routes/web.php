<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Project;
use App\Http\Controllers\ProjectController;


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    $featured = Project::where('featured', true)->orderBy('created_at', 'asc')->get();
    return view('home', compact('featured'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio', function () {
    $projects = Project::orderBy('created_at', 'asc')->get();
    return view('portfolio', compact('projects'));
});

Route::get('/projects/{slug}', [ProjectController::class, 'portSingle'])->name('portfolio.single');
