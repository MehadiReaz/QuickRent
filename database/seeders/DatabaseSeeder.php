<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            customerSeeder::class,
            ProductSeeder::class,
            AdminSeeder::class,
            CategorySeeder::class,

        ]);
    }
}
