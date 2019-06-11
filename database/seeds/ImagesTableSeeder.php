<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'user_id' => 1,
                'typecamera_id' => 1,
                'typeobjectif_id' => 2,
                'name' => '3sj1TeoL6HL09nPktQulHnhcwUXgvpwJmzRMf51v.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:23:59',
                'updated_at' => '2017-11-02 17:23:59',
            ),
            
        ));
        
        
    }
}