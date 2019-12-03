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
        ['time' => '08:00 AM'],
        ['time' => '09:00 AM'],
        ['time' => '10:00 AM'],
        ['time' => '11:00 AM'],
        ['time' => '12:00 AM'],
        ['time' => '01:00 PM'],
        ['time' => '02:00 PM'],
        ['time' => '03:00 PM'],
        ['time' => '04:00 PM'],
        ['time' => '05:00 PM'],
        ['time' => '06:00 PM'],
        ['time' => '07:00 PM'],
        ['time' => '08:00 PM'],
        ['time' => '09:00 PM'],
        ['time' => '10:00 PM']
        ]
    );
    }
}
