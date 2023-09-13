<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search for books by title or author
        $results = Book::where('title', 'like', "%$query%")
                        ->orWhere('author', 'like', "%$query%")
                        ->get();

        return view('search', compact('results'));
    }

    public function Books()
    {
        $books = Book::all();

        return view('books', compact('books'));
    }

    public function authorsWithBooks()
    {
        // Query the database to get a list of authors and their books
        $authors = DB::table('books')->select('author')->distinct()->orderBy('author', 'asc')->get();
        $authorsWithBooks = [];

        // Loop through the authors and fetch their books
        foreach ($authors as $author) {
            $books = Book::where('author', $author->author)->get();
            $authorsWithBooks[] = [
                'author' => $author->author,
                'books' => $books,
            ];
        }

        // Return the view with authors and their books
        return view('authors', compact('authorsWithBooks'));
    }

    public function show_book($title)
    {
        $book = Book::where('title', $title)->first();

        if (!$book){
            abort(404);
        }

        return view('show', compact('book'));
    }

    // public function booksByAuthor($author)
    // {
    //     $books = Book::where('author', $author)->get();

    //     // if (!$books->isEmpty()){
    //     //     abort(404);
    //     // }
    
    //     return view('books_with_authors', compact('books', 'author'));
    // }
    
        public function booksByAuthor($author)
    {
        $books = Book::where('author', $author)->get();

        if ($books->isEmpty()) {
            // If there are no books for the specified author, you can return an error view or redirect as needed.
            //return redirect()->route('error.page'); // Replace 'error.page' with the route or view name for displaying an error message.
            abort(404);
        }

        return view('books_with_authors', compact('books', 'author'));
    }


}

