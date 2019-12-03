<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('staffs')->insert([
                'name' => $faker->name(),
                'spa_id' => rand(1, 10),
                'is_active' => 1,
                'avatar' => 'image-seeder.jpg',
                'gender' => 1,
            ]);
        }
    }
}
