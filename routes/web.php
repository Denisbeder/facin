<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('datatable');
});

Route::get('/users-form', function () {
    return view('users-form');
});

Route::get('/authors-form', function () {
    return view('authors-form');
});

Route::get('/categories-form', function () {
    return view('categories-form');
});

Route::get('/home-hightlights', function () {
    return view('home-hightlights');
});
