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

        $limit = 3;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('services')->insert([
                'spa_id' => rand(1, 10),
                'name_service' => $faker->name(),
                'icon' => 'image-seeder.jpg',
            ]);
        }
    }
}
