<?php

use App\Model\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0;$i < 20;$i ++){
            $newPost = new Post();
            $newPost->title = $faker->realText(35);
            $newPost->author = $faker->userName();
            $newPost->thumb = $faker->imageUrl();
            $newPost->post_date = $faker->dateTimeThisYear();
            $newPost->post_content = $faker->realText(200);
            $newPost->save();
        }
    }
}
