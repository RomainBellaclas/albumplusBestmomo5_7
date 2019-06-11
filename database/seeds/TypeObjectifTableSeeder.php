<?php

use Illuminate\Database\Seeder;

class TypeObjectifTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        \DB::table('typeobjectif')->insert(array (

            0 => 
            array (
                'lettre' => 'Z',
                'slug' => 'z',
                'libellé' => 'Zoom',
                'grossMin' => NULL,
                'grossMax' => NULL,

            ),
            1 => 
            array (
                'lettre' => 'G',
                'slug' => 'g',
                'libellé' => 'Grand angle',
                'grossMin' => NULL,
                'grossMax' => NULL,
                
            ),
            2 => 
            array (
                'lettre' => 'T',
                'slug' => 't',
                'libellé' => 'Téléobjectif',
                'grossMin' => NULL,
                'grossMax' => NULL,
                
            ),
            
        ));
        
        
    
    }
}
