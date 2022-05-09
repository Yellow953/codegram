<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
 
Route::get('/post/create', [App\Http\Controllers\postsController::class, 'create']);
Route::post('/post', [App\Http\Controllers\postsController::class, 'store']);
Route::get('/post/{post}', [App\Http\Controllers\postsController::class, 'show']);

Route::get('/profile/{user}', [App\Http\Controllers\profilesController::class, 'index'])->name('profile.show');
Route::patch('/profile/{user}', [App\Http\Controllers\profilesController::class, 'update'])->name('profile.update');
Route::get('/profile/{user}/edit', [App\Http\Controllers\profilesController::class, 'edit'])->name('profile.edit');

Auth::routes();
Route::get('/', function () { return view('welcome'); });
