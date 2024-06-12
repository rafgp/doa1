<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('index');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books{book}/update', [BookController::class, 'update'])->name('books.update');
Route::delete('/books{book}/update', [BookController::class, 'destroy'])->name('books.destroy');