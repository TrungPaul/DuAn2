<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = [
            ['name' => 'Hà Nội'],

            ["name" => "Hồ Chí Minh"],

            ['name' => "Đà Nẵng"]
        ];

        DB::table('locations')->insert($city);
    }
}
