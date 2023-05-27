<?php

use App\Enums\PostState;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::redirect('/', '/dashboard')->name('app.index');

Route::middleware([])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Post
    Route::get('/post', [PostController::class, 'index'])->name('post.index');
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
    //Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit')->where('post', '[0-9]+');
    //Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update')->where('post', '[0-9]+');
    Route::delete('/post/{post}', [PostController::class, 'delete'])->name('post.delete')->where('post', '[0-9]+');

    // User
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit')->where('user', '[0-9]+');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update')->where('user', '[0-9]+');
    //Route::delete('/user/{user}', [UserController::class, 'delete'])->name('user.delete')->where('user', '[0-9]+');
});

Route::get('/teste', function () {
    dd(collect(\App\Enums\State::cases())->pluck('value')->toArray());
});
