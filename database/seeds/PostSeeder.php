<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;


class PostSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) {

            $title = $faker -> sentences(rand(1 , 3), true);
            $creator_name = $faker -> firstName();
            $description = $faker -> text(200);

            Post::create([
                'title'         =>  $title,
                'creator_name'  =>  $creator_name,
                'description'   =>  $description,
                'slug'          =>  Post::generateSlug($title),
            ]);
        }
    }
}
