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
            ['title' => 'Dziady cz. 2', 'author' => 'Adam Mickiewicz'],
            ['title' => 'Dziady cz. 3', 'author' => 'Adam Mickiewicz'],
            ['title' => 'Szepty moich lęków', 'author' => 'Mariusz Kanios'],
            ['title' => 'Duma i uprzedzenie', 'author' => 'Jane Austen'],
            ['title' => 'Wojna i pokój', 'author' => 'Lew Tołstoj'],
            ['title' => 'Zabić drozda', 'author' => 'Harper Lee'],
            ['title' => '1984', 'author' => 'George Orwell'],
            ['title' => 'Wielki Gatsby', 'author' => 'F. Scott Fitzgerald'],
            ['title' => 'Nowy wspaniały świat', 'author' => 'Aldous Huxley'],
            ['title' => 'Władca Pierścieni', 'author' => 'J.R.R. Tolkien'],
            ['title' => 'Zbrodnia i kara', 'author' => 'Fiodor Dostojewski'],
            ['title' => 'Chłopiec z latawcem', 'author' => 'J.D. Salinger'],
            ['title' => 'Mistrz i Małgorzata', 'author' => 'Michaił Bułhakow'],
            ['title' => 'Hobbit', 'author' => 'J.R.R. Tolkien'],
            ['title' => 'Opowieść wigilijna', 'author' => 'Charles Dickens'],
            ['title' => 'Don Kichot', 'author' => 'Miguel de Cervantes'],
            ['title' => 'Igrzyska śmierci', 'author' => 'Suzanne Collins'],
            ['title' => 'W pustyni i w puszczy', 'author' => 'Henryk Sienkiewicz'],
            ['title' => 'Odyseja', 'author' => 'Homer'],
            ['title' => 'Droga', 'author' => 'Cormac McCarthy'],
            ['title' => 'Alchemik', 'author' => 'Paulo Coelho'],
            ['title' => 'Lśnienie', 'author' => 'Stephen King'],
            ['title' => 'Przeminęło z wiatrem', 'author' => 'Margaret Mitchell'],
            ['title' => 'Kod Leonarda da Vinci', 'author' => 'Dan Brown'],
            ['title' => 'Sto lat samotności', 'author' => 'Gabriel García Márquez'],
            ['title' => 'Anna Karenina', 'author' => 'Lew Tołstoj'],
            ['title' => 'Winorośl gniewu', 'author' => 'John Steinbeck'],
            ['title' => 'Chłopiec z latawcem', 'author' => 'Khaled Hosseini'],
            // Add more data as needed
        ];

        DB::table('books')->insert($books);
        //DB::table('books')->truncate();

    }
}
