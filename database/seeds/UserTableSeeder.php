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
        $usertest = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'phone_number' => '0393079176',
            'date_of_birth' => now(),
            'is_active' => 1,
            'avatar' => 'admin.png',
            'gender' => 1,
            'role' => 100,
        ];
        DB::table('users')->insert($usertest);

        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('123456'),
                'phone_number' => '0393079176',
                'date_of_birth' => now(),
                'is_active' => 1,
                'avatar' => 'default-avatar.png',
                'gender' => 1,
            ]);
        }
    }
}
