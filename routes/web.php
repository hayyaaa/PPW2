<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/buku', [BukuController::class, 'index']);

Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

Route::delete('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::get('buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');

Route::post('/buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');

Route::get('/buku/search', [BukuController::class, 'search'])->name('buku.search');

