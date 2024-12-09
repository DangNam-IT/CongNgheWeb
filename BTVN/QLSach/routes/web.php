<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\BookController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('libraries', LibraryController::class);
Route::resource('books', BookController::class);
