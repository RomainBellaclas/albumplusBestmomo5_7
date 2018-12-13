<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('image_user')->insert([

            1 => [
                'image_id' => 1,
                'user_id' => 3,
                'rating' => 2,
            ],
            
        ]);
    }
}