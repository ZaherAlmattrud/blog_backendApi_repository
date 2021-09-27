<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $comment_1  = \App\Models\Comment::create([

            "content"=>"test comment" ,
            "article_id"=>"1" ,
        ]);

        $comment_2  = \App\Models\Comment::create([

            "content"=>"test comment" ,
            "article_id"=>"1" ,
        ]);
    }
}
