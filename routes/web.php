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


Route::get('/books/{title}', [BookController::class, 'show_book'])->name('books.show_book');

Route::get('/authors/{author}', [BookController::class, 'booksByAuthor'])->name('books_with_authors');

//Route::get('/books/{title}', 'BookController@show');

