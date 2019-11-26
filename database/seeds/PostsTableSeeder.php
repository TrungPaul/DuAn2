<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('posts')->insert([
<<<<<<< HEAD
                'user_id' => rand(1, 10),
                'cate_id' => rand(1, 10),
=======
                'user_id' => 1,
                'cate_id' => rand(1, 10), 
>>>>>>> reply_cmt
                'title' => $faker->word,
                'description' => $faker->word,
                'image' => 'image-seeder.jpg',
                'content' => $faker->word,
                'status' => 1,
            ]);
        }
    }
}
