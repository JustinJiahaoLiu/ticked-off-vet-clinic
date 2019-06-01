<?php

use Illuminate\Database\Seeder;

class StaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stays')->delete();
        
        \DB::table('stays')->insert(array (
            0 => 
            array (
                'stayId' => 1,
                'stayStartDate' => '2013-01-01',
                'stayEndDate' => '2013-01-03',
                'petId' => 56,
                'stayCost' => '682.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'stayId' => 2,
                'stayStartDate' => '2013-01-01',
                'stayEndDate' => '2013-01-05',
                'petId' => 97,
                'stayCost' => '121.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'stayId' => 3,
                'stayStartDate' => '2013-01-01',
                'stayEndDate' => '2013-01-08',
                'petId' => 12,
                'stayCost' => '222.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'stayId' => 4,
                'stayStartDate' => '2013-01-02',
                'stayEndDate' => '2013-01-04',
                'petId' => 84,
                'stayCost' => '126.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'stayId' => 5,
                'stayStartDate' => '2013-01-02',
                'stayEndDate' => '2013-01-05',
                'petId' => 56,
                'stayCost' => '655.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'stayId' => 6,
                'stayStartDate' => '2013-01-02',
                'stayEndDate' => '2013-01-05',
                'petId' => 24,
                'stayCost' => '729.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'stayId' => 7,
                'stayStartDate' => '2013-01-02',
                'stayEndDate' => '2013-01-06',
                'petId' => 103,
                'stayCost' => '327.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'stayId' => 8,
                'stayStartDate' => '2013-01-02',
                'stayEndDate' => '2013-01-11',
                'petId' => 36,
                'stayCost' => '274.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'stayId' => 9,
                'stayStartDate' => '2013-01-03',
                'stayEndDate' => '2013-01-04',
                'petId' => 18,
                'stayCost' => '658.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'stayId' => 10,
                'stayStartDate' => '2013-01-03',
                'stayEndDate' => '2013-01-05',
                'petId' => 8,
                'stayCost' => '292.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'stayId' => 11,
                'stayStartDate' => '2013-01-03',
                'stayEndDate' => '2013-01-05',
                'petId' => 70,
                'stayCost' => '640.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'stayId' => 12,
                'stayStartDate' => '2013-01-03',
                'stayEndDate' => '2013-01-06',
                'petId' => 45,
                'stayCost' => '684.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'stayId' => 13,
                'stayStartDate' => '2013-01-03',
                'stayEndDate' => '2013-01-06',
                'petId' => 66,
                'stayCost' => '553.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'stayId' => 14,
                'stayStartDate' => '2013-01-03',
                'stayEndDate' => '2013-01-06',
                'petId' => 33,
                'stayCost' => '253.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'stayId' => 15,
                'stayStartDate' => '2013-01-03',
                'stayEndDate' => '2013-01-07',
                'petId' => 64,
                'stayCost' => '252.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'stayId' => 16,
                'stayStartDate' => '2013-01-03',
                'stayEndDate' => '2013-01-09',
                'petId' => 21,
                'stayCost' => '87.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'stayId' => 17,
                'stayStartDate' => '2013-01-03',
                'stayEndDate' => '2013-01-14',
                'petId' => 62,
                'stayCost' => '522.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'stayId' => 18,
                'stayStartDate' => '2013-01-04',
                'stayEndDate' => '2013-01-06',
                'petId' => 41,
                'stayCost' => '666.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'stayId' => 19,
                'stayStartDate' => '2013-01-04',
                'stayEndDate' => '2013-01-07',
                'petId' => 41,
                'stayCost' => '324.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'stayId' => 20,
                'stayStartDate' => '2013-01-04',
                'stayEndDate' => '2013-01-08',
                'petId' => 7,
                'stayCost' => '579.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'stayId' => 21,
                'stayStartDate' => '2013-01-04',
                'stayEndDate' => '2013-01-14',
                'petId' => 86,
                'stayCost' => '612.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'stayId' => 22,
                'stayStartDate' => '2013-01-04',
                'stayEndDate' => '2013-01-15',
                'petId' => 24,
                'stayCost' => '676.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'stayId' => 23,
                'stayStartDate' => '2013-01-05',
                'stayEndDate' => '2013-01-06',
                'petId' => 105,
                'stayCost' => '84.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'stayId' => 24,
                'stayStartDate' => '2013-01-05',
                'stayEndDate' => '2013-01-06',
                'petId' => 97,
                'stayCost' => '183.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'stayId' => 25,
                'stayStartDate' => '2013-01-05',
                'stayEndDate' => '2013-01-07',
                'petId' => 48,
                'stayCost' => '166.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'stayId' => 26,
                'stayStartDate' => '2013-01-05',
                'stayEndDate' => '2013-01-07',
                'petId' => 45,
                'stayCost' => '123.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'stayId' => 27,
                'stayStartDate' => '2013-01-05',
                'stayEndDate' => '2013-01-08',
                'petId' => 29,
                'stayCost' => '571.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'stayId' => 28,
                'stayStartDate' => '2013-01-05',
                'stayEndDate' => '2013-01-09',
                'petId' => 46,
                'stayCost' => '156.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'stayId' => 29,
                'stayStartDate' => '2013-01-05',
                'stayEndDate' => '2013-01-12',
                'petId' => 77,
                'stayCost' => '666.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'stayId' => 30,
                'stayStartDate' => '2013-01-05',
                'stayEndDate' => '2013-01-17',
                'petId' => 50,
                'stayCost' => '103.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'stayId' => 31,
                'stayStartDate' => '2013-01-06',
                'stayEndDate' => '2013-01-07',
                'petId' => 71,
                'stayCost' => '630.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'stayId' => 32,
                'stayStartDate' => '2013-01-06',
                'stayEndDate' => '2013-01-08',
                'petId' => 102,
                'stayCost' => '630.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'stayId' => 33,
                'stayStartDate' => '2013-01-06',
                'stayEndDate' => '2013-01-10',
                'petId' => 19,
                'stayCost' => '535.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'stayId' => 34,
                'stayStartDate' => '2013-01-06',
                'stayEndDate' => '2013-01-10',
                'petId' => 106,
                'stayCost' => '556.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'stayId' => 35,
                'stayStartDate' => '2013-01-06',
                'stayEndDate' => '2013-01-10',
                'petId' => 8,
                'stayCost' => '703.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'stayId' => 36,
                'stayStartDate' => '2013-01-07',
                'stayEndDate' => '2013-01-08',
                'petId' => 8,
                'stayCost' => '417.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'stayId' => 37,
                'stayStartDate' => '2013-01-07',
                'stayEndDate' => '2013-01-08',
                'petId' => 85,
                'stayCost' => '555.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'stayId' => 38,
                'stayStartDate' => '2013-01-07',
                'stayEndDate' => '2013-01-09',
                'petId' => 92,
                'stayCost' => '388.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'stayId' => 39,
                'stayStartDate' => '2013-01-07',
                'stayEndDate' => '2013-01-11',
                'petId' => 61,
                'stayCost' => '36.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'stayId' => 40,
                'stayStartDate' => '2013-01-07',
                'stayEndDate' => '2013-01-12',
                'petId' => 9,
                'stayCost' => '327.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'stayId' => 41,
                'stayStartDate' => '2013-01-07',
                'stayEndDate' => '2013-01-15',
                'petId' => 41,
                'stayCost' => '681.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'stayId' => 42,
                'stayStartDate' => '2013-01-08',
                'stayEndDate' => '2013-01-10',
                'petId' => 38,
                'stayCost' => '424.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'stayId' => 43,
                'stayStartDate' => '2013-01-08',
                'stayEndDate' => '2013-01-11',
                'petId' => 110,
                'stayCost' => '228.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'stayId' => 44,
                'stayStartDate' => '2013-01-08',
                'stayEndDate' => '2013-01-12',
                'petId' => 105,
                'stayCost' => '658.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'stayId' => 45,
                'stayStartDate' => '2013-01-08',
                'stayEndDate' => '2013-01-16',
                'petId' => 61,
                'stayCost' => '262.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'stayId' => 46,
                'stayStartDate' => '2013-01-09',
                'stayEndDate' => '2013-01-10',
                'petId' => 58,
                'stayCost' => '304.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'stayId' => 47,
                'stayStartDate' => '2013-01-09',
                'stayEndDate' => '2013-01-10',
                'petId' => 88,
                'stayCost' => '43.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'stayId' => 48,
                'stayStartDate' => '2013-01-09',
                'stayEndDate' => '2013-01-10',
                'petId' => 55,
                'stayCost' => '373.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'stayId' => 49,
                'stayStartDate' => '2013-01-09',
                'stayEndDate' => '2013-01-10',
                'petId' => 106,
                'stayCost' => '103.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'stayId' => 50,
                'stayStartDate' => '2013-01-09',
                'stayEndDate' => '2013-01-11',
                'petId' => 76,
                'stayCost' => '573.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'stayId' => 51,
                'stayStartDate' => '2013-01-09',
                'stayEndDate' => '2013-01-11',
                'petId' => 48,
                'stayCost' => '592.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'stayId' => 52,
                'stayStartDate' => '2013-01-09',
                'stayEndDate' => '2013-01-13',
                'petId' => 92,
                'stayCost' => '319.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'stayId' => 53,
                'stayStartDate' => '2013-01-10',
                'stayEndDate' => '2013-01-12',
                'petId' => 109,
                'stayCost' => '634.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'stayId' => 54,
                'stayStartDate' => '2013-01-10',
                'stayEndDate' => '2013-01-12',
                'petId' => 22,
                'stayCost' => '213.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'stayId' => 55,
                'stayStartDate' => '2013-01-10',
                'stayEndDate' => '2013-01-13',
                'petId' => 69,
                'stayCost' => '373.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'stayId' => 56,
                'stayStartDate' => '2013-01-10',
                'stayEndDate' => '2013-01-13',
                'petId' => 12,
                'stayCost' => '96.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'stayId' => 57,
                'stayStartDate' => '2013-01-10',
                'stayEndDate' => '2013-01-14',
                'petId' => 53,
                'stayCost' => '373.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'stayId' => 58,
                'stayStartDate' => '2013-01-10',
                'stayEndDate' => '2013-01-16',
                'petId' => 51,
                'stayCost' => '666.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'stayId' => 59,
                'stayStartDate' => '2013-01-10',
                'stayEndDate' => '2013-01-21',
                'petId' => 110,
                'stayCost' => '550.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'stayId' => 60,
                'stayStartDate' => '2013-01-11',
                'stayEndDate' => '2013-01-13',
                'petId' => 86,
                'stayCost' => '108.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'stayId' => 61,
                'stayStartDate' => '2013-01-11',
                'stayEndDate' => '2013-01-14',
                'petId' => 14,
                'stayCost' => '484.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'stayId' => 62,
                'stayStartDate' => '2013-01-11',
                'stayEndDate' => '2013-01-14',
                'petId' => 85,
                'stayCost' => '295.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'stayId' => 63,
                'stayStartDate' => '2013-01-11',
                'stayEndDate' => '2013-01-17',
                'petId' => 84,
                'stayCost' => '636.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'stayId' => 64,
                'stayStartDate' => '2013-01-11',
                'stayEndDate' => '2013-01-21',
                'petId' => 33,
                'stayCost' => '138.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'stayId' => 65,
                'stayStartDate' => '2013-01-11',
                'stayEndDate' => '2013-01-23',
                'petId' => 93,
                'stayCost' => '297.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'stayId' => 66,
                'stayStartDate' => '2013-01-11',
                'stayEndDate' => '2013-01-24',
                'petId' => 99,
                'stayCost' => '177.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'stayId' => 67,
                'stayStartDate' => '2013-01-12',
                'stayEndDate' => '2013-01-13',
                'petId' => 86,
                'stayCost' => '201.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'stayId' => 68,
                'stayStartDate' => '2013-01-12',
                'stayEndDate' => '2013-01-13',
                'petId' => 12,
                'stayCost' => '657.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'stayId' => 69,
                'stayStartDate' => '2013-01-12',
                'stayEndDate' => '2013-01-13',
                'petId' => 81,
                'stayCost' => '678.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'stayId' => 70,
                'stayStartDate' => '2013-01-12',
                'stayEndDate' => '2013-01-14',
                'petId' => 91,
                'stayCost' => '270.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'stayId' => 71,
                'stayStartDate' => '2013-01-12',
                'stayEndDate' => '2013-01-15',
                'petId' => 52,
                'stayCost' => '307.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'stayId' => 72,
                'stayStartDate' => '2013-01-12',
                'stayEndDate' => '2013-01-18',
                'petId' => 17,
                'stayCost' => '621.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'stayId' => 73,
                'stayStartDate' => '2013-01-13',
                'stayEndDate' => '2013-01-14',
                'petId' => 67,
                'stayCost' => '694.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'stayId' => 74,
                'stayStartDate' => '2013-01-13',
                'stayEndDate' => '2013-01-15',
                'petId' => 62,
                'stayCost' => '571.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'stayId' => 75,
                'stayStartDate' => '2013-01-13',
                'stayEndDate' => '2013-01-15',
                'petId' => 67,
                'stayCost' => '537.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'stayId' => 76,
                'stayStartDate' => '2013-01-13',
                'stayEndDate' => '2013-01-15',
                'petId' => 59,
                'stayCost' => '292.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'stayId' => 77,
                'stayStartDate' => '2013-01-13',
                'stayEndDate' => '2013-01-17',
                'petId' => 47,
                'stayCost' => '214.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'stayId' => 78,
                'stayStartDate' => '2013-01-13',
                'stayEndDate' => '2013-01-17',
                'petId' => 45,
                'stayCost' => '444.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'stayId' => 79,
                'stayStartDate' => '2013-01-13',
                'stayEndDate' => '2013-01-17',
                'petId' => 72,
                'stayCost' => '442.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'stayId' => 80,
                'stayStartDate' => '2013-01-13',
                'stayEndDate' => '2013-01-25',
                'petId' => 17,
                'stayCost' => '535.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'stayId' => 81,
                'stayStartDate' => '2013-01-14',
                'stayEndDate' => '2013-01-17',
                'petId' => 75,
                'stayCost' => '445.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'stayId' => 82,
                'stayStartDate' => '2013-01-14',
                'stayEndDate' => '2013-01-17',
                'petId' => 108,
                'stayCost' => '535.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'stayId' => 83,
                'stayStartDate' => '2013-01-14',
                'stayEndDate' => '2013-01-18',
                'petId' => 93,
                'stayCost' => '559.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'stayId' => 84,
                'stayStartDate' => '2013-01-14',
                'stayEndDate' => '2013-01-24',
                'petId' => 82,
                'stayCost' => '160.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'stayId' => 85,
                'stayStartDate' => '2013-01-14',
                'stayEndDate' => '2013-01-27',
                'petId' => 98,
                'stayCost' => '456.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'stayId' => 86,
                'stayStartDate' => '2013-01-15',
                'stayEndDate' => '2013-01-18',
                'petId' => 66,
                'stayCost' => '633.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'stayId' => 87,
                'stayStartDate' => '2013-01-15',
                'stayEndDate' => '2013-01-18',
                'petId' => 15,
                'stayCost' => '409.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'stayId' => 88,
                'stayStartDate' => '2013-01-15',
                'stayEndDate' => '2013-01-18',
                'petId' => 63,
                'stayCost' => '604.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'stayId' => 89,
                'stayStartDate' => '2013-01-15',
                'stayEndDate' => '2013-01-19',
                'petId' => 7,
                'stayCost' => '568.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'stayId' => 90,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-17',
                'petId' => 66,
                'stayCost' => '193.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'stayId' => 91,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-17',
                'petId' => 100,
                'stayCost' => '204.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'stayId' => 92,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-17',
                'petId' => 76,
                'stayCost' => '631.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'stayId' => 93,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-17',
                'petId' => 45,
                'stayCost' => '304.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'stayId' => 94,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-17',
                'petId' => 92,
                'stayCost' => '247.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'stayId' => 95,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-18',
                'petId' => 98,
                'stayCost' => '660.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'stayId' => 96,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-18',
                'petId' => 20,
                'stayCost' => '283.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'stayId' => 97,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-19',
                'petId' => 43,
                'stayCost' => '619.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'stayId' => 98,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-19',
                'petId' => 90,
                'stayCost' => '226.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'stayId' => 99,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-20',
                'petId' => 91,
                'stayCost' => '667.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'stayId' => 100,
                'stayStartDate' => '2013-01-16',
                'stayEndDate' => '2013-01-29',
                'petId' => 94,
                'stayCost' => '678.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'stayId' => 101,
                'stayStartDate' => '2013-01-17',
                'stayEndDate' => '2013-01-19',
                'petId' => 105,
                'stayCost' => '708.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'stayId' => 102,
                'stayStartDate' => '2013-01-17',
                'stayEndDate' => '2013-01-19',
                'petId' => 57,
                'stayCost' => '735.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'stayId' => 103,
                'stayStartDate' => '2013-01-17',
                'stayEndDate' => '2013-01-21',
                'petId' => 55,
                'stayCost' => '600.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'stayId' => 104,
                'stayStartDate' => '2013-01-17',
                'stayEndDate' => '2013-01-30',
                'petId' => 103,
                'stayCost' => '190.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'stayId' => 105,
                'stayStartDate' => '2013-01-18',
                'stayEndDate' => '2013-01-19',
                'petId' => 10,
                'stayCost' => '61.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'stayId' => 106,
                'stayStartDate' => '2013-01-18',
                'stayEndDate' => '2013-01-19',
                'petId' => 72,
                'stayCost' => '369.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'stayId' => 107,
                'stayStartDate' => '2013-01-18',
                'stayEndDate' => '2013-01-20',
                'petId' => 67,
                'stayCost' => '693.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'stayId' => 108,
                'stayStartDate' => '2013-01-18',
                'stayEndDate' => '2013-01-21',
                'petId' => 84,
                'stayCost' => '693.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'stayId' => 109,
                'stayStartDate' => '2013-01-18',
                'stayEndDate' => '2013-01-22',
                'petId' => 78,
                'stayCost' => '198.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'stayId' => 110,
                'stayStartDate' => '2013-01-18',
                'stayEndDate' => '2013-01-22',
                'petId' => 42,
                'stayCost' => '61.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'stayId' => 111,
                'stayStartDate' => '2013-01-18',
                'stayEndDate' => '2013-01-22',
                'petId' => 66,
                'stayCost' => '724.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'stayId' => 112,
                'stayStartDate' => '2013-01-18',
                'stayEndDate' => '2013-01-22',
                'petId' => 26,
                'stayCost' => '517.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'stayId' => 113,
                'stayStartDate' => '2013-01-18',
                'stayEndDate' => '2013-01-25',
                'petId' => 43,
                'stayCost' => '606.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'stayId' => 114,
                'stayStartDate' => '2013-01-19',
                'stayEndDate' => '2013-01-20',
                'petId' => 109,
                'stayCost' => '736.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'stayId' => 115,
                'stayStartDate' => '2013-01-19',
                'stayEndDate' => '2013-01-22',
                'petId' => 7,
                'stayCost' => '453.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'stayId' => 116,
                'stayStartDate' => '2013-01-19',
                'stayEndDate' => '2013-01-23',
                'petId' => 50,
                'stayCost' => '699.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'stayId' => 117,
                'stayStartDate' => '2013-01-19',
                'stayEndDate' => '2013-01-30',
                'petId' => 64,
                'stayCost' => '627.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'stayId' => 118,
                'stayStartDate' => '2013-01-20',
                'stayEndDate' => '2013-01-21',
                'petId' => 76,
                'stayCost' => '487.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'stayId' => 119,
                'stayStartDate' => '2013-01-20',
                'stayEndDate' => '2013-01-21',
                'petId' => 42,
                'stayCost' => '45.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'stayId' => 120,
                'stayStartDate' => '2013-01-20',
                'stayEndDate' => '2013-01-23',
                'petId' => 6,
                'stayCost' => '163.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'stayId' => 121,
                'stayStartDate' => '2013-01-20',
                'stayEndDate' => '2013-01-23',
                'petId' => 63,
                'stayCost' => '726.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'stayId' => 122,
                'stayStartDate' => '2013-01-20',
                'stayEndDate' => '2013-01-26',
                'petId' => 68,
                'stayCost' => '705.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'stayId' => 123,
                'stayStartDate' => '2013-01-20',
                'stayEndDate' => '2013-01-28',
                'petId' => 40,
                'stayCost' => '175.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'stayId' => 124,
                'stayStartDate' => '2013-01-20',
                'stayEndDate' => '2013-01-29',
                'petId' => 108,
                'stayCost' => '34.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'stayId' => 125,
                'stayStartDate' => '2013-01-20',
                'stayEndDate' => '2013-02-01',
                'petId' => 15,
                'stayCost' => '274.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'stayId' => 126,
                'stayStartDate' => '2013-01-21',
                'stayEndDate' => '2013-01-23',
                'petId' => 11,
                'stayCost' => '126.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'stayId' => 127,
                'stayStartDate' => '2013-01-21',
                'stayEndDate' => '2013-01-25',
                'petId' => 39,
                'stayCost' => '450.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'stayId' => 128,
                'stayStartDate' => '2013-01-21',
                'stayEndDate' => '2013-01-25',
                'petId' => 33,
                'stayCost' => '390.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'stayId' => 129,
                'stayStartDate' => '2013-01-21',
                'stayEndDate' => '2013-01-25',
                'petId' => 49,
                'stayCost' => '735.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'stayId' => 130,
                'stayStartDate' => '2013-01-21',
                'stayEndDate' => '2013-01-25',
                'petId' => 78,
                'stayCost' => '238.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'stayId' => 131,
                'stayStartDate' => '2013-01-21',
                'stayEndDate' => '2013-01-25',
                'petId' => 46,
                'stayCost' => '631.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'stayId' => 132,
                'stayStartDate' => '2013-01-21',
                'stayEndDate' => '2013-01-29',
                'petId' => 98,
                'stayCost' => '151.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'stayId' => 133,
                'stayStartDate' => '2013-01-21',
                'stayEndDate' => '2013-02-04',
                'petId' => 30,
                'stayCost' => '135.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'stayId' => 134,
                'stayStartDate' => '2013-01-22',
                'stayEndDate' => '2013-01-23',
                'petId' => 49,
                'stayCost' => '505.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'stayId' => 135,
                'stayStartDate' => '2013-01-22',
                'stayEndDate' => '2013-01-25',
                'petId' => 102,
                'stayCost' => '114.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'stayId' => 136,
                'stayStartDate' => '2013-01-22',
                'stayEndDate' => '2013-01-25',
                'petId' => 30,
                'stayCost' => '175.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'stayId' => 137,
                'stayStartDate' => '2013-01-22',
                'stayEndDate' => '2013-02-01',
                'petId' => 36,
                'stayCost' => '573.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'stayId' => 138,
                'stayStartDate' => '2013-01-22',
                'stayEndDate' => '2013-02-01',
                'petId' => 29,
                'stayCost' => '424.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'stayId' => 139,
                'stayStartDate' => '2013-01-22',
                'stayEndDate' => '2013-02-02',
                'petId' => 23,
                'stayCost' => '628.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'stayId' => 140,
                'stayStartDate' => '2013-01-22',
                'stayEndDate' => '2013-02-04',
                'petId' => 25,
                'stayCost' => '582.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'stayId' => 141,
                'stayStartDate' => '2013-01-23',
                'stayEndDate' => '2013-01-24',
                'petId' => 29,
                'stayCost' => '475.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'stayId' => 142,
                'stayStartDate' => '2013-01-23',
                'stayEndDate' => '2013-01-25',
                'petId' => 8,
                'stayCost' => '571.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'stayId' => 143,
                'stayStartDate' => '2013-01-23',
                'stayEndDate' => '2013-01-25',
                'petId' => 39,
                'stayCost' => '253.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'stayId' => 144,
                'stayStartDate' => '2013-01-23',
                'stayEndDate' => '2013-01-27',
                'petId' => 102,
                'stayCost' => '204.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'stayId' => 145,
                'stayStartDate' => '2013-01-24',
                'stayEndDate' => '2013-01-25',
                'petId' => 84,
                'stayCost' => '547.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'stayId' => 146,
                'stayStartDate' => '2013-01-24',
                'stayEndDate' => '2013-01-26',
                'petId' => 83,
                'stayCost' => '727.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'stayId' => 147,
                'stayStartDate' => '2013-01-24',
                'stayEndDate' => '2013-01-27',
                'petId' => 75,
                'stayCost' => '540.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'stayId' => 148,
                'stayStartDate' => '2013-01-24',
                'stayEndDate' => '2013-01-27',
                'petId' => 23,
                'stayCost' => '604.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'stayId' => 149,
                'stayStartDate' => '2013-01-24',
                'stayEndDate' => '2013-01-28',
                'petId' => 19,
                'stayCost' => '507.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'stayId' => 150,
                'stayStartDate' => '2013-01-24',
                'stayEndDate' => '2013-01-28',
                'petId' => 3,
                'stayCost' => '166.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'stayId' => 151,
                'stayStartDate' => '2013-01-24',
                'stayEndDate' => '2013-01-30',
                'petId' => 2,
                'stayCost' => '442.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'stayId' => 152,
                'stayStartDate' => '2013-01-25',
                'stayEndDate' => '2013-01-26',
                'petId' => 61,
                'stayCost' => '130.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'stayId' => 153,
                'stayStartDate' => '2013-01-25',
                'stayEndDate' => '2013-01-26',
                'petId' => 88,
                'stayCost' => '255.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'stayId' => 154,
                'stayStartDate' => '2013-01-25',
                'stayEndDate' => '2013-01-28',
                'petId' => 109,
                'stayCost' => '748.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'stayId' => 155,
                'stayStartDate' => '2013-01-25',
                'stayEndDate' => '2013-01-28',
                'petId' => 104,
                'stayCost' => '66.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'stayId' => 156,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-27',
                'petId' => 54,
                'stayCost' => '496.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'stayId' => 157,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-27',
                'petId' => 24,
                'stayCost' => '655.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'stayId' => 158,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-27',
                'petId' => 37,
                'stayCost' => '366.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'stayId' => 159,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-27',
                'petId' => 91,
                'stayCost' => '198.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'stayId' => 160,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-28',
                'petId' => 23,
                'stayCost' => '411.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'stayId' => 161,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-28',
                'petId' => 50,
                'stayCost' => '660.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'stayId' => 162,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-28',
                'petId' => 110,
                'stayCost' => '426.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'stayId' => 163,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-29',
                'petId' => 28,
                'stayCost' => '91.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'stayId' => 164,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-29',
                'petId' => 82,
                'stayCost' => '531.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'stayId' => 165,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-29',
                'petId' => 63,
                'stayCost' => '640.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'stayId' => 166,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-30',
                'petId' => 21,
                'stayCost' => '223.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'stayId' => 167,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-01-31',
                'petId' => 56,
                'stayCost' => '534.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'stayId' => 168,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-02-01',
                'petId' => 75,
                'stayCost' => '369.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'stayId' => 169,
                'stayStartDate' => '2013-01-26',
                'stayEndDate' => '2013-02-06',
                'petId' => 14,
                'stayCost' => '643.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'stayId' => 170,
                'stayStartDate' => '2013-01-27',
                'stayEndDate' => '2013-01-29',
                'petId' => 55,
                'stayCost' => '238.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'stayId' => 171,
                'stayStartDate' => '2013-01-27',
                'stayEndDate' => '2013-01-30',
                'petId' => 69,
                'stayCost' => '195.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'stayId' => 172,
                'stayStartDate' => '2013-01-27',
                'stayEndDate' => '2013-01-31',
                'petId' => 2,
                'stayCost' => '361.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'stayId' => 173,
                'stayStartDate' => '2013-01-27',
                'stayEndDate' => '2013-01-31',
                'petId' => 54,
                'stayCost' => '211.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'stayId' => 174,
                'stayStartDate' => '2013-01-28',
                'stayEndDate' => '2013-01-29',
                'petId' => 90,
                'stayCost' => '298.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'stayId' => 175,
                'stayStartDate' => '2013-01-28',
                'stayEndDate' => '2013-01-30',
                'petId' => 39,
                'stayCost' => '111.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'stayId' => 176,
                'stayStartDate' => '2013-01-28',
                'stayEndDate' => '2013-01-31',
                'petId' => 15,
                'stayCost' => '604.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'stayId' => 177,
                'stayStartDate' => '2013-01-28',
                'stayEndDate' => '2013-02-02',
                'petId' => 43,
                'stayCost' => '739.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'stayId' => 178,
                'stayStartDate' => '2013-01-28',
                'stayEndDate' => '2013-02-10',
                'petId' => 47,
                'stayCost' => '138.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'stayId' => 179,
                'stayStartDate' => '2013-01-28',
                'stayEndDate' => '2013-02-11',
                'petId' => 29,
                'stayCost' => '414.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'stayId' => 180,
                'stayStartDate' => '2013-01-29',
                'stayEndDate' => '2013-01-30',
                'petId' => 62,
                'stayCost' => '82.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'stayId' => 181,
                'stayStartDate' => '2013-01-29',
                'stayEndDate' => '2013-01-30',
                'petId' => 63,
                'stayCost' => '174.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'stayId' => 182,
                'stayStartDate' => '2013-01-29',
                'stayEndDate' => '2013-01-31',
                'petId' => 4,
                'stayCost' => '712.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'stayId' => 183,
                'stayStartDate' => '2013-01-29',
                'stayEndDate' => '2013-02-01',
                'petId' => 19,
                'stayCost' => '435.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'stayId' => 184,
                'stayStartDate' => '2013-01-29',
                'stayEndDate' => '2013-02-01',
                'petId' => 87,
                'stayCost' => '630.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'stayId' => 185,
                'stayStartDate' => '2013-01-29',
                'stayEndDate' => '2013-02-02',
                'petId' => 27,
                'stayCost' => '486.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'stayId' => 186,
                'stayStartDate' => '2013-01-29',
                'stayEndDate' => '2013-02-06',
                'petId' => 45,
                'stayCost' => '265.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'stayId' => 187,
                'stayStartDate' => '2013-01-29',
                'stayEndDate' => '2013-02-09',
                'petId' => 29,
                'stayCost' => '169.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'stayId' => 188,
                'stayStartDate' => '2013-01-30',
                'stayEndDate' => '2013-01-31',
                'petId' => 30,
                'stayCost' => '355.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'stayId' => 189,
                'stayStartDate' => '2013-01-30',
                'stayEndDate' => '2013-02-01',
                'petId' => 106,
                'stayCost' => '397.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'stayId' => 190,
                'stayStartDate' => '2013-01-30',
                'stayEndDate' => '2013-02-02',
                'petId' => 44,
                'stayCost' => '618.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'stayId' => 191,
                'stayStartDate' => '2013-01-30',
                'stayEndDate' => '2013-02-03',
                'petId' => 22,
                'stayCost' => '327.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'stayId' => 192,
                'stayStartDate' => '2013-01-30',
                'stayEndDate' => '2013-02-03',
                'petId' => 75,
                'stayCost' => '261.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'stayId' => 193,
                'stayStartDate' => '2013-01-30',
                'stayEndDate' => '2013-02-03',
                'petId' => 27,
                'stayCost' => '484.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'stayId' => 194,
                'stayStartDate' => '2013-01-30',
                'stayEndDate' => '2013-02-03',
                'petId' => 10,
                'stayCost' => '391.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'stayId' => 195,
                'stayStartDate' => '2013-01-30',
                'stayEndDate' => '2013-02-06',
                'petId' => 105,
                'stayCost' => '157.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'stayId' => 196,
                'stayStartDate' => '2013-01-30',
                'stayEndDate' => '2013-02-06',
                'petId' => 80,
                'stayCost' => '456.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'stayId' => 197,
                'stayStartDate' => '2013-01-31',
                'stayEndDate' => '2013-02-01',
                'petId' => 76,
                'stayCost' => '661.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'stayId' => 198,
                'stayStartDate' => '2013-01-31',
                'stayEndDate' => '2013-02-01',
                'petId' => 31,
                'stayCost' => '549.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'stayId' => 199,
                'stayStartDate' => '2013-01-31',
                'stayEndDate' => '2013-02-04',
                'petId' => 44,
                'stayCost' => '657.0000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'stayId' => 200,
                'stayStartDate' => '2013-01-31',
                'stayEndDate' => '2013-02-07',
                'petId' => 68,
                'stayCost' => '85.5000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}