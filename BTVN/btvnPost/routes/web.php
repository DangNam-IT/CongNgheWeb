<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
//trả về trang chủ với tất cả các bài viết
Route::get("/", PostController::class.'@index')->name('posts.index');
//trả về 1 form thêm bài viết mới
Route::get('/posts/create',PostController::class.'@create')->name('posts.create');
// thêm 1 bài viết mới vào database
Route::post('/posts', PostController::class.'@store')->name('posts.store');

// trả về 1 trang hiển thị tất cả các bài viết
Route::get('/posts/{post}', PostController::class.'@show')->name('posts.show');

// trả về 1 form để chỉnh sửa bài viết
Route::get('/posts/{post}/edit', PostController::class.'@edit')->name ('posts.edit');

// sau khi nhấn cập nhật bài viết
Route::put('/posts/{post}', PostController::class.'@update')->name ('posts.update');

// sau khi ấn xóa bài viết

Route::delete('/posts/{post}', PostController::class.'@destroy')->name ('posts.destroy');