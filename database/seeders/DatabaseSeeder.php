<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LocationSeeder::class,
            TypeSeeder::class,
            UserSeeder::class,
            PetSeeder::class,
            PetImageSeeder::class,
            SpeciesSeeder::class,
            UserPreferredSpeciesSeeder::class,
            AdoptionSeeder::class,
            UserPreferenceSeeder::class
        ]);
    }
}
