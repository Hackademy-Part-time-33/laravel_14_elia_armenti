<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;


 
Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::resource('tags', TagController::class);
});


Route::get('/', function () {
    return view('homepage');
});

