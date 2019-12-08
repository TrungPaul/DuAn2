<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ServiceDeatailTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(SpaTableSeeder::class);
        $this->call(TimeTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(BookingOfUserTableSeeder::class);
    }
}
