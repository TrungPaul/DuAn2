<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
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
            DB::table('services')->insert([
                'spa_id' => 1,
                'name_service' => $faker->name,
                'icon' => $faker->image('public/images',640,480, 'people', false),
            ]);
        }
    }
}
