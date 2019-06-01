<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'staffId' => 1,
                'title' => 'Mr',
                'firstName' => 'Keith',
                'lastName' => 'Cabrade',
                'gender' => 'M',
                'DOB' => '1973-02-13',
                'email' => 'keith@tickedoff.com.au',
            'phone1' => '(02) 9912 8192',
                'phone2' => '0401 982 389',
                'street1' => '',
                'street2' => '10 Cracked Rd',
                'suburb' => 'Avalon',
                'state' => 'NSW',
                'postcode' => '2107',
                'position' => 'Manager',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'staffId' => 2,
                'title' => 'Ms',
                'firstName' => 'Savannah',
                'lastName' => 'Chartreux',
                'gender' => 'F',
                'DOB' => '1966-07-01',
                'email' => 'savannah@tickedoff.com.au',
            'phone1' => '(02) 8863 4123',
                'phone2' => '0411 786 344',
                'street1' => 'Unit 1',
                'street2' => '19 Serval St',
                'suburb' => 'Mona Vale',
                'state' => 'NSW',
                'postcode' => '2103',
                'position' => 'Vet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'staffId' => 3,
                'title' => 'Dr',
                'firstName' => 'Peter',
                'lastName' => 'Pug',
                'gender' => 'M',
                'DOB' => '1965-11-13',
                'email' => 'peter@tickedoff.com.au',
                'phone1' => '',
                'phone2' => '0401 298 128',
                'street1' => '',
                'street2' => '80 Panther Pl',
                'suburb' => 'Morisset',
                'state' => 'NSW',
                'postcode' => '2264',
                'position' => 'Vet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'staffId' => 4,
                'title' => 'Mrs',
                'firstName' => 'Gail',
                'lastName' => 'Cavia',
                'gender' => 'F',
                'DOB' => '1972-12-12',
                'email' => 'gail@tickedoff.com.au',
            'phone1' => '(02) 9317 1278',
                'phone2' => '0401 829 998',
                'street1' => '',
                'street2' => '123 Porcellus Rd',
                'suburb' => 'Newport',
                'state' => 'NSW',
                'postcode' => '2106',
                'position' => 'Office Assistant',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'staffId' => 5,
                'title' => 'Mrs',
                'firstName' => 'Greta',
                'lastName' => 'Mustela',
                'gender' => 'F',
                'DOB' => '1970-03-12',
                'email' => 'greta@tickedoff.com.au',
                'phone1' => '',
                'phone2' => '0411 238 812',
                'street1' => '',
                'street2' => '10 Polecat St',
                'suburb' => 'Turramurra',
                'state' => 'NSW',
                'postcode' => '2074',
                'position' => 'Vet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}