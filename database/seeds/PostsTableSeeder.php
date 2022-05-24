<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 60; $i++) { 
            $newPost = new Post();
            $newPost->title = ucfirst($faker->unique()->word(3, true));
            $newPost->autore = $faker->name();
            $newPost->content = $faker->paragraph(7, true);
            $newPost->save();

        }
    }
}