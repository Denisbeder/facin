<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::redirect('/', '/dashboard');
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
