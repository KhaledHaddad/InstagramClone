<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/p/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::get('/p/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::post('/p', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
