<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $article_1  = \App\Models\Article::create([

            "title"=>"test title",
            "content"=>"test content",
            "image"=>"1.jpeg",
            "status"=>"1",
            "user_id"=>"2",
            "category_id"=>"1",

        ]);

        $article_2  = \App\Models\Article::create([

            "title"=>"test title",
            "content"=>"test content",
            "image"=>"1.jpeg",
            "status"=>"1",
            "user_id"=>"2",
            "category_id"=>"1",

        ]);
    }
}
