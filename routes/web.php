<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SearchController;

// Display the main view
Route::get('/', [BookController::class, 'index'])->name('main');

// Handle the search form submission
//Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search', [BookController::class, 'search'])->name('search');


// Display an author and their books
Route::get('/books', [BookController::class, 'books'])->name('books');

Route::get('/authors', [BookController::class, 'authorsWithBooks'])->name('authors');



//Route::get('/search', 'SearchController@index')->name('search');
// Route::get('/all-books', 'BookController@index')->name('books');

