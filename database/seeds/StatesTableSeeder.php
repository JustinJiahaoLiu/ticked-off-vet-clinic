<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'state' => 'ACT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'state' => 'NSW',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'state' => 'NT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'state' => 'QLD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'state' => 'SA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'state' => 'TAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'state' => 'VIC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'state' => 'WA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}