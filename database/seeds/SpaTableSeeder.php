<?php

use Illuminate\Database\Seeder;

class SpaTableSeeder extends Seeder
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
            DB::table('spas')->insert([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('123456'),
                'phone' => '0393079176',
                'city_id' => rand(1, 3),
                'location' => $faker->address(),
                'is_active' => 1,
                'image' => 'tmv-xuan-huong.jpg'
            ]);
        }
    }
}
