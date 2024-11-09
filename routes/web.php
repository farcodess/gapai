<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

// Auth::routes();

// Alternatively, you can define the route manually
Route::get('/register', [RegisterController::class, 'regis']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/learn', [RegisterController::class, 'learn']);
Route::get('/trans', [RegisterController::class, 'trans']);

// Route::get('/register', function () {
//     return view('register');
// });

