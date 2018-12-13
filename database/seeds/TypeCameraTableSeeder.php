<?php

use Illuminate\Database\Seeder;

class TypeCameraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('typecamera')->insert(array ( 
            0 => 
            array (
                'name' => 'Smartphones',
                'slug' => 'smartphones',
                'libellé' => NULL,
            ),
            1 => 
            array (
                'name' => 'Camescopes',
                'slug' => 'camescopes',
                'libellé' => NULL,
            ),
            2 => 
            array (
                'name' => 'DSLR',
                'slug' => 'dslr',
                'libellé' => NULL,
            ),
            3 => 
            array (
                'name' => 'Prosommateurs',
                'slug' => 'prosommateurs',
                'libellé' => NULL,
            ),
            4 => 
            array (
                'name' => 'Professionnelles',
                'slug' => 'professionnelles',
                'libellé' => NULL,
            ),
            5 => 
            array (
                'name' => 'Caméras dédiées',
                'slug' => 'cameradediees',
                'libellé' => NULL,
            ),
        ));
    }
}
