<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Chiaki Morosawa',
            'photo' => 'chiaki.jpg',
            'bio' => 'Penulis skenario dan novelis Jepang, terkenal atas karyanya pada seri Mobile Suit Gundam SEED'
        ]);
        
        Author::create([
            'name' => 'Raditya Dika',
            'photo' => 'radityadika.jpg',
            'bio' => 'Penulis, komika, dan sutradara asal Indonesia, dikenal dengan karya-karyanya di bidang komedi'
        ]);

        Author::create([
            'name' => 'Satoshi Tajiri',
            'photo' => 'satoshi.jpg',
            'bio' => 'Penulis Jepang, pencipta dari waralaba ternama Pokemon'
        ]);
    }
}
