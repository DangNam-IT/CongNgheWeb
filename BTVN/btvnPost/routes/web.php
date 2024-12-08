<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Route::get(uri:'/', action:[HomeController::class, 'index']);
Route::get(uri:'posts',action: [PostController::class, 'index']);
