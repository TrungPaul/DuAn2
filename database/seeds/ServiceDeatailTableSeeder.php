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

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('service_detail')->insert([
                'spa_id' => rand(1, 10),
                'service_id'=> rand(1, 3),
                'name_service' => $faker->email(),
                'price_service' => rand(300000, 1000000),
                'detail_service' => '0393079176',
                'discount' => rand(10, 50),
                'image_service' => 'image-seeder.jpg',
            ]);
        }
    }
}
