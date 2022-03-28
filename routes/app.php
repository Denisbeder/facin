<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::redirect('/', '/dashboard');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/post', [PostController::class, 'index'])->name('post.index');
