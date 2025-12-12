<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route baru
Route::get('/hello', function () {
    return 'Hello World dari Laravel!';
});

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});