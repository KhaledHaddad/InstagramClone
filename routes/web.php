<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/p/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::get('/p/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::post('/p', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/profiles/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profiles.show');
