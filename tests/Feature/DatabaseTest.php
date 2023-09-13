<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Book;

class DatabaseTest extends TestCase
{
    //use RefreshDatabase; // This trait will migrate your database and run tests within a transaction

    public function test_database()
    {
        // Check if a book with the title 'Harry Potter' exists in the database
        $this->assertDatabaseHas('books', ['title' => '1984']);

        // $this->assertDatabaseHas('users', [
        //     'email' => 'sally@example.com',
        // ]);

    }
}
