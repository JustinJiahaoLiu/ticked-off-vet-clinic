<?php

use Illuminate\Database\Seeder;

class InventoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('inventories')->delete();
        
        \DB::table('inventories')->insert(array (
            0 => 
            array (
                'itemId' => 1,
                'itemName' => 'Bandage scissors',
                'itemDescription' => 'Universal Scissors are multi-purpose scissors, good for bandaging. Stainless steel, 14cm in length.',
                'numberOnHand' => 4,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'itemId' => 2,
                'itemName' => 'Coflex bandage',
                'itemDescription' => 'CoFlex ?is a cohesive flexible bandage manufactured for bovine hoof trimmers that can also be used as a lightweight wound dressing. CoFlex does not stick to skin or hair, and provides consistent compression without the danger of constriction.',
                'numberOnHand' => 17,
                'numberOnOrder' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'itemId' => 3,
                'itemName' => 'Cotton wool roll',
                'itemDescription' => 'Smith and Nephew Cotton Wool Roll is a cellulose fibre/cotton blend dressing of surgical absorbent quality for wound management, bandaging and first aid.',
                'numberOnHand' => 13,
                'numberOnOrder' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'itemId' => 4,
                'itemName' => 'Elastoplast roll',
                'itemDescription' => 'Value pack of 12 - Super adhesive bandages. Veterinary Elastoplast is an elastic adhesive bandage.',
                'numberOnHand' => 5,
                'numberOnOrder' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'itemId' => 5,
                'itemName' => 'Jelonet',
                'itemDescription' => 'Jelonet* is a paraffin gauze dressing 36 pieces of 10x10cm Features Soft paraffin base Sterile leno weave.',
                'numberOnHand' => 29,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'itemId' => 6,
                'itemName' => 'Pill popper tablet applicator',
                'itemDescription' => 'Holds the tablet for you, making it easier to give your dog or cat tablets. You depress the plunger to administer the dose.',
                'numberOnHand' => 38,
                'numberOnOrder' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'itemId' => 7,
                'itemName' => 'Rip-Rap heavy bandage',
                'itemDescription' => 'Heavy duty self-adhesive bandage - the "King Gee" of cohesive bandages. Ideal for use on large animals.4.5m long, 5cm wide.',
                'numberOnHand' => 3,
                'numberOnOrder' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'itemId' => 8,
                'itemName' => 'Sharps container',
                'itemDescription' => '1.4L sharps disposable container. Please refer to local legislation regarding disposal of used containers.',
                'numberOnHand' => 0,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'itemId' => 9,
                'itemName' => 'Stethoscope',
                'itemDescription' => 'Basic dual headed stethoscope',
                'numberOnHand' => 4,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'itemId' => 10,
                'itemName' => 'Swabs guaze',
                'itemDescription' => 'Guaze for wounds. 5cm wide.',
                'numberOnHand' => 102,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'itemId' => 11,
            'itemName' => 'Syringe (10ml)',
                'itemDescription' => '10ml Centre Fit Luer Slip steril syringe.',
                'numberOnHand' => 15,
                'numberOnOrder' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'itemId' => 12,
                'itemName' => 'Epsom salt',
                'itemDescription' => 'Also known as magnesium sulphate. Feed grade',
                'numberOnHand' => 10,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'itemId' => 13,
                'itemName' => 'Veterinary Gamgee',
                'itemDescription' => 'Highly-absorant hospital-grade cotton wool encased in a low-adherent, tubular non-woven cover.',
                'numberOnHand' => 5,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'itemId' => 14,
                'itemName' => 'Tick-approved microwave bags',
                'itemDescription' => 'Zip-lock bags that are designed specifically for tick destruction.',
                'numberOnHand' => 318,
                'numberOnOrder' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'itemId' => 15,
                'itemName' => 'Wrap it bandage',
                'itemDescription' => 'Cohesive non-woven bandage. 1.8m unstretched and 4.5m stretched.',
                'numberOnHand' => 24,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'itemId' => 16,
                'itemName' => 'Bunny bubble bath',
                'itemDescription' => 'Gently cleans and conditions coats of rabbits and guinea pigs. Tearless formulation suitable for every day use.',
                'numberOnHand' => 20,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'itemId' => 17,
                'itemName' => 'Cylap RCD - Rabbit Vaccine',
                'itemDescription' => 'Control of rabbit calicivirus disease. Vaccinate at 10 - 12 weeks then yearly. Give 1ml subcutaneously.',
                'numberOnHand' => 8,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'itemId' => 18,
                'itemName' => 'Fidos bubble bath',
                'itemDescription' => '"Fido"s Bunny Bath Shampoo and Cond in 1 is a mild soap free formulation especially suitable for the delicate skins of rabbits, guinea pigs and other furry pets. Your pet\'s coat is left clean and lustrous with a long lasting baby powder scent.',
                'numberOnHand' => 3,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'itemId' => 19,
                'itemName' => 'Biolac animal rearing teats - T1',
                'itemDescription' => 'Fake teats for assisting with the rearing of animals. Teatlicious.',
                'numberOnHand' => 4,
                'numberOnOrder' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'itemId' => 20,
                'itemName' => 'Biolac animal rearing teats - T2',
                'itemDescription' => 'Fake teats for assisting with the rearing of animals. Teatlicious.',
                'numberOnHand' => 3,
                'numberOnOrder' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'itemId' => 21,
                'itemName' => 'Biolac animal rearing teats - T3',
                'itemDescription' => 'Fake teats for assisting with the rearing of animals. Teatlicious.',
                'numberOnHand' => 12,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'itemId' => 22,
                'itemName' => 'Biolac animal rearing teats - T4',
                'itemDescription' => 'Fake teats for assisting with the rearing of animals. Teatlicious.',
                'numberOnHand' => 6,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'itemId' => 23,
                'itemName' => 'Pet nursing bottle',
                'itemDescription' => 'A bottle?',
                'numberOnHand' => 0,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'itemId' => 24,
                'itemName' => 'Dentipet finger toothbrush',
                'itemDescription' => 'For the cleaning of animals\' teeth using one\'s finger.',
                'numberOnHand' => 2,
                'numberOnOrder' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'itemId' => 25,
                'itemName' => 'PetLife QuickFit Muzzle',
                'itemDescription' => 'The PetLife Quick Fit Muzzle is a fantastic standard dog muzzle. It even has a brilliant adjustable velcro strap, so you know it\'ll fit properly. There\'s a mesh part under the chin too for better ventilation and comfort.',
                'numberOnHand' => 2,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'itemId' => 26,
                'itemName' => 'Beta-Cel',
                'itemDescription' => 'Electrolyte mixture for replacement therapy for racing greyhounds.',
                'numberOnHand' => 0,
                'numberOnOrder' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'itemId' => 27,
                'itemName' => 'Equivit Enduramex',
                'itemDescription' => 'Endura-Max Plus Electrolyte Paste is a buffered oral electrolyte supplement designed specifically for endurance horses.',
                'numberOnHand' => 0,
                'numberOnOrder' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'itemId' => 28,
                'itemName' => 'Thundershirt for cats',
                'itemDescription' => 'A shirt that provids general well-balanced pressure resulting in a calm animal.',
                'numberOnHand' => 12,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'itemId' => 29,
                'itemName' => 'Thundershirt for dogs',
                'itemDescription' => 'A shirt that provids general well-balanced pressure resulting in a calm animal.',
                'numberOnHand' => 3,
                'numberOnOrder' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'itemId' => 30,
                'itemName' => 'Thundershirt for ferrets',
                'itemDescription' => 'A shirt that provids general well-balanced pressure resulting in a calm animal.',
                'numberOnHand' => 8,
                'numberOnOrder' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'itemId' => 31,
                'itemName' => 'Thundershirt for fish',
                'itemDescription' => 'A shirt that provids general well-balanced pressure resulting in a calm animal.',
                'numberOnHand' => 1,
                'numberOnOrder' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'itemId' => 32,
                'itemName' => 'Thundershirt for goats',
                'itemDescription' => 'A shirt that provids general well-balanced pressure resulting in a calm animal.',
                'numberOnHand' => 0,
                'numberOnOrder' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'itemId' => 33,
                'itemName' => 'Thundershirt for slugs',
                'itemDescription' => 'A shirt that provids general well-balanced pressure resulting in a calm animal.',
                'numberOnHand' => 0,
                'numberOnOrder' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'itemId' => 34,
                'itemName' => 'Permoxin',
                'itemDescription' => 'Antiparasitic wash',
                'numberOnHand' => 123,
                'numberOnOrder' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'itemId' => 35,
                'itemName' => 'Advantage for dogs',
                'itemDescription' => 'Advantage flea and tick solution.',
                'numberOnHand' => 184,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'itemId' => 36,
                'itemName' => 'Advantage for cats',
                'itemDescription' => 'Advantage flea and tick solution.',
                'numberOnHand' => 172,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'itemId' => 37,
                'itemName' => 'Advantage for fish',
                'itemDescription' => 'Advantage flea and tick solution.',
                'numberOnHand' => 12,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'itemId' => 38,
                'itemName' => 'Advantage for ferrets',
                'itemDescription' => 'Advantage flea and tick solution.',
                'numberOnHand' => 62,
                'numberOnOrder' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'itemId' => 39,
                'itemName' => 'Advantage for goats',
                'itemDescription' => 'Advantage flea and tick solution.',
                'numberOnHand' => 21,
                'numberOnOrder' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}