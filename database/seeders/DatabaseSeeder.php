<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(LocationSeeder::class);
        $this->call(InvestigationAreaSeeder::class);
        $this->call(FinancingSeeder::class);
        $this->call(DataUserSeeder::class);
        $this->call(SonUserSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PeiSeeder::class);
        $this->call(PoaSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}
