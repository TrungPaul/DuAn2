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
                'icon' => 'face.jpg'
            ],
            [
                'name_service' => 'Dịch Vụ Móng',
                'icon' => 'nail.jpg'
            ],
            [
                'name_service' => 'Dịch Vụ Body',
                'icon' => 'body.jpg'
            ]
        ];

        DB::table('services')->insert($service);
    }
}
