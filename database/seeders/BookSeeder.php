<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books = [
            ['title' => 'Harry Potter', 'author' => 'J.K. Rowling'],
            ['title' => 'Dziady cz2', 'author' => 'Adam Mickiewicz'],
            ['title' => 'Dziady cz3', 'author' => 'Adam Mickiewicz'],
            ['title' => 'Szepty moich lęków', 'author' => 'Mariusz Kanios'],
            // Add more data as needed
        ];

        DB::table('books')->insert($books);
        // DB::table('books')->truncate();

    }
}
