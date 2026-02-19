<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::factory(6)->create()->each(function ($article) {
            $number_rounds = random_int(1, 4);

            Comment::factory()->count($number_rounds)->for($article)->create();
        });
    }
}
