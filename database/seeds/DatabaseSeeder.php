<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(PetsTableSeeder::class);
        $this->call(InventoriesTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
        $this->call(StaysTableSeeder::class);
    }
}
