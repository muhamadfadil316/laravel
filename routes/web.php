<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Datang";
});

Route::get('/mahasiswa', [ProfileController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/produk', function () {
    return view('/produk/index');
});

Route::get('/produk/{id}', function ($id) {
    return view('/produk/index', ['idproduk' => $id]);
});

Route::get('/profil', function() {
    return view('profil',['prodi'=>'Teknik Informatika']);
});

// books
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/store', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');


Route::get('/kelurahan', [KelurahanController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index']);





