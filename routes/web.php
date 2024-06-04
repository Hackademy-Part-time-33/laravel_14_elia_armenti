<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

Route::resource('posts', PostController::class);
Route::resource('tags', TagController::class);

Route::get('/', function () {
    return view('welcome');
});

