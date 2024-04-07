<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::view('/', 'dashboard')->name('dashboard');

Route::resource('posts', PostController::class);
Route::inertia('about', 'About')->name('about');
Route::inertia('login', 'Pages/Login')->name('login');
