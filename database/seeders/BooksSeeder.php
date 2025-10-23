<?php

namespace Database\Seeders;

use App\Models\Authors;
use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $author = Authors::findOrFail(7);

        Books::create([
            "title"=> "Akustik",
            "author"=> $author->name,
            "author_id"=> 7,
            "published_year"=> 2025,
        ]);
    }
}
