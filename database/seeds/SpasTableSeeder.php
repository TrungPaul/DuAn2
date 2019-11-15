<?php

use Illuminate\Database\Seeder;

class SpasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $spas = [];
        $faker = Faker\Factory::create();

        for ($i=0 ; $i<20 ; $i++)
        {
            $item = [
                'id' => mt_rand(),
                'name' => $faker->name,
                'location' =>$faker->realText($maxNbChars = 70, $indexSize = 2),
                'image' => $faker->image('public/images',640,480, 'people', false),
                'phone' => mt_rand(),
                'is_active'=> rand(0, 1),
            ];
            $spas[] = $item;
        }
        DB::table('spas')->insert($spas);
    }

}

