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
                'user_id' => rand(1, 10),
                'cate_id' => rand(1, 5),
                'title' => $faker->word,
                'description' => $faker->word,
                'image' => 'post.jpg',
                'content' => $faker->text,
                'status' => 1,
            ]);
        }
    }
}
