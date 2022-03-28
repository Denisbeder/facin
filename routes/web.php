<?php

use Illuminate\Support\Facades\Route;

Route::get('/{path?}', fn ($path = null) => redirect(config('app.url_app') . '/' . $path));
