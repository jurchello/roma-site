<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/laravel/dino', function () {
    return view('dino');
});

Route::get('/laravel/pictures', function () {
    return view('pictures');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/laravel/scratch', function () {
    return view('scratch');
});

Route::get('/laravel/my-dog', function () {
    return view('dog');
});