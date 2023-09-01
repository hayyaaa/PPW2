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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "hayya",
        "email" => "hayya@gmail.com"
    ]);
});

Route::get('/hello', function () {
    return view('hello', [
        "greeting" => "Hello, welcome to my website! :)"
    ]);
});
