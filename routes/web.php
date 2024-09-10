<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
});

Route::get('/login', function () {
    return view('auth.login.index');
});
// Register 
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Category
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
Route::put('/category/{slug}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{slug}', [CategoryController::class, 'destroy'])->name('category.destroy');

// Links
Route::get('/manage-links', [LinkController::class, 'index'])->name('link');
Route::get('/create-link', [LinkController::class, 'create'])->name('link.create');
Route::get('/update-link/{slug}', [LinkController::class, 'edit'])->name('link.edit');
Route::post('/create-links', [LinkController::class, 'store'])->name('link.store');
Route::put('/update-link/{slug}', [LinkController::class, 'update'])->name('link.update');
Route::delete('/delete-link/{slug}', [LinkController::class, 'destroy'])->name('link.destroy');


Route::get('/users', function () {
    return view('main.users.index');
});
Route::get('/profile', function () {
    return view('main.profile.index');
});