<?php

use Illuminate\Database\Seeder;

class ServiceDeatailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            DB::table('service_detail')->insert([
                'spa_id' => 1,
                'service_id'=> rand(1, 3),
                'name_service' => $faker->name,
                'price_service' => rand(300000, 1000000),
                'detail_service' => $faker->text,
                'discount' => rand(10, 50),
                'image_service' => 'image-seeder.jpg',
            ]);
        }
        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('service_detail')->insert([
                'spa_id' => rand(1, 10),
                'service_id'=> rand(1, 3),
                'name_service' => $faker->name,
                'price_service' => rand(300000, 1000000),
                'detail_service' => $faker->text,
                'discount' => rand(10, 50),
                'image_service' => 'image-seeder.jpg',
            ]);
        }
    }
}
