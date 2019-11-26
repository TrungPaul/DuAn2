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

            ["name" => "Đà Nẵng"],

            ['name' => "Thành phố HCM"]
        ];

        DB::table('locations')->insert($city);
    }
}
