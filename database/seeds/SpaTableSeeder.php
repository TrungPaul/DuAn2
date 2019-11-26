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
                'location' => rand(1, 3) ,
                'is_active' => 0,
                'image' => 'image-seeder.jpg'
            ]);
        }
    }
}
