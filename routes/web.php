<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');

Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');

Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');

Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/blogs/create', [BlogController::class, 'create'])->middleware('auth')->name('blogs.create');

// Route::get('/create-user', [UserController::class, 'createUser']);
