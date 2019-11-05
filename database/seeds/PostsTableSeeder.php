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

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('posts')->insert([
                'user_id' => 1,
                'cate_id' => 1, 
                'title' => $faker->word,
                'image' => $faker->image('public/images',640,480, 'people', false),
                'content' => $faker->word,
                'status' => 1,
            ]);
        }
    }
}
