<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Home Route
Route::get('/', [PageController::class, 'home'])->name('home');

// About Us Route
Route::get('/about', [PageController::class, 'about'])->name('about');

// Services Route
Route::get('/services', [PageController::class, 'services'])->name('services');

// Projects Route
Route::get('/projects', [PageController::class, 'projects'])->name('projects');

// Blog Route
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

// Contact Us Route
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
