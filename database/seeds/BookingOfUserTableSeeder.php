<?php

use Illuminate\Database\Seeder;

class BookingOfUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15; $i++) {
            DB::table('booking_of_user')->insert([
                'user_id' => rand(1, 30),
                'spa_id' => 1,
                'date_booking' => now(),
                'time_booking' => rand(1, 6),
                'staff_id' => rand(0, 10),
                'service_detail_id' => rand(1, 5),
                'status' => rand(0, 2)
            ]);
        }
        for ($i = 0; $i < 20; $i++) {
            DB::table('booking_of_user')->insert([
                'user_id' => 1,
                'spa_id' => rand(2,6),
                'date_booking' => now(),
                'time_booking' => rand(1, 6),
                'staff_id' => rand(1, 10),
                'service_detail_id' => rand(1, 3),
                'status' => rand(0, 2)
            ]);
        }
    }
}
