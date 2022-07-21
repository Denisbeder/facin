<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::redirect('/', '/dashboard')->name('app.index');

//Route::middleware('auth')->group(function () {
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Post
Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
//Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit')->where('post', '[0-9]+');
//Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update')->where('post', '[0-9]+');
Route::delete('/post/{post}', [PostController::class, 'delete'])->name('post.delete')->where('post', '[0-9]+');

// User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit')->where('user', '[0-9]+');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update')->where('user', '[0-9]+');
//Route::delete('/user/{user}', [UserController::class, 'delete'])->name('user.delete')->where('user', '[0-9]+');

// Author
Route::get('/author', [AuthorController::class, 'index'])->name('author.index');
Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
Route::post('/author', [AuthorController::class, 'store'])->name('author.store');
Route::get('/author/{user}/edit', [AuthorController::class, 'edit'])->name('author.edit')->where('user', '[0-9]+');
Route::put('/author/{user}', [AuthorController::class, 'update'])->name('author.update')->where('user', '[0-9]+');
    //Route::delete('/author/{user}', [AuthorController::class, 'delete'])->name('author.delete')->where('user', '[0-9]+');
//});
