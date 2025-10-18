<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Mobile Suit Gundam SEED Freedom',
            'description' => 'Novel tentang perang antara 2 faksi di dunia waralaba gundam',
            'price' => '120000',
            'stock' => '10',
            'cover_photo' => 'seedfreedom.png',
            'genre_id' => '1',
            'author_id' => '1',
        ]);

        Book::create([
            'title' => 'Marmut Merah Jambu',
            'description' => 'Novel tentang kisah cinta raditya dika yang dia alami dahulu',
            'price' => '150000',
            'stock' => '20',
            'cover_photo' => 'mmj.png',
            'genre_id' => '2',
            'author_id' => '2',
        ]);

        Book::create([
            'title' => 'One Piece',
            'description' => 'Manga tentang Petualangan karakter utama Luffy beserta teman-temannya di dunia bajak laut',
            'price' => '60000',
            'stock' => '15',
            'cover_photo' => 'onepiece.png',
            'genre_id' => '3',
            'author_id' => '3',
        ]);
    }
}
