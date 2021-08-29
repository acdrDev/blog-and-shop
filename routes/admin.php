<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;

/* Login */
Route::get('/', function(){
  return view('admin.login');
});

Route::post('/', [LoginController::class, "login"])->name('login');

Route::post('/logout', [LoginController::class, 'logout']);

// Admin routes
Route::get('/dashboard', function(){
  return view('admin.index');
})->middleware('auth');

Route::resource('/posts', PostController::class)->only(['index', 'create', 'edit'])->middleware('auth');

Route::resource('/gallery', GalleryController::class)->only(['index', 'create', 'edit'])->middleware('auth');