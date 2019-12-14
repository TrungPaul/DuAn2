<?php

use Illuminate\Database\Seeder;

class TimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([
        ['time' => '08:00:00'],
        ['time' => '09:00:00'],
        ['time' => '10:00:00'],
        ['time' => '11:00:00'],
        ['time' => '12:00:00'],
        ['time' => '13:00:00'],
        ['time' => '14:00:00'],
        ['time' => '15:00:00'],
        ['time' => '16:00:00'],
        ['time' => '17:00:00'],
        ['time' => '18:00:00'],
        ['time' => '19:00:00'],
        ['time' => '20:00:00'],
        ['time' => '21:00:00'],
        ['time' => '22:00:00'],
        ]
    );
    }
}
