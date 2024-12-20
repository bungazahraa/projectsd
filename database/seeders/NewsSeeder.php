<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'image_url' => 'images/fk10.png',
            'title' => 'Contoh berita',
            'content' => 'ini adalah isi',
        ]);
    }
}
