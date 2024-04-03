<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::view('/', 'dashboard')->name('dashboard');

Route::get('posts', [PostController::class, 'index']);
