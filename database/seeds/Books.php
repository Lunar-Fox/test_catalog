<?php

use Illuminate\Database\Seeder;
use App\Book;

class Books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'name' => 'testbook1',
                'author' => 'testauthor1',
                'published' => '2010',
            ],
            [
                'name' => 'testbook2',
                'author' => 'testauthor2',
                'published' => '1833',
            ],
            [
                'name' => 'testbook3',
                'author' => 'testauthor3',
                'published' => '1985',
            ],
            [
                'name' => 'testbook4',
                'author' => 'testauthor4',
                'published' => '1985',
            ],
            [
                'name' => 'testbook5',
                'author' => 'testauthor5',
                'published' => '1833',
            ],
        ];

        Book::insert($books);
    }
}
