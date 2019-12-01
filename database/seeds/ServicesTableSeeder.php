<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = [
            [
                'name_service' => 'Dịch Vụ Mặt',
                'icon' => 'image-seeder.jpg'
            ],
            [
                'name_service' => 'Dịch Vụ Móng',
                'icon' => 'image-seeder.jpg'
            ],
            [
                'name_service' => 'Dịch Vụ Body',
                'icon' => 'image-seeder.jpg'
            ]
        ];

        DB::table('services')->insert($service);
    }
}
