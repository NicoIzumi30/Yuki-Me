<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login.index');
});
Route::get('/register', function () {
    return view('auth.register.index');
});
Route::get('/dashboard', function () {
    return view('main.dashboard.index');    
});
Route::get('/category', function () {
    return view('main.category.index');    
});
Route::get('/manage-links', function () {
    return view('main.links.index');    
});
Route::get('/users', function () {
    return view('main.users.index');    
});
Route::get('/profile', function () {
    return view('main.profile.index');    
});