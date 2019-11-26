<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('123456'),
                'phone_number' => '0393079176',
                'date_of_birth' => now(),
                'is_active' => 0,
                'avatar' => 'image-seeder.jpg',
                'gender' => 1,
            ]);
        }
    }
}
