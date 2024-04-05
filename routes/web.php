<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::view('/', 'dashboard')->name('dashboard');

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::inertia('about', 'About')->name('about');
