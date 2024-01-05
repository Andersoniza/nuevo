<?php

namespace Database\Seeders;

use App\Models\ExperimentalStation;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Province::factory()
            ->count(24)
            ->state(new Sequence(
                ["name" => "Azuay"],
                ["name" => "Bolívar"],
                ["name" => "Cañar"],
                ["name" => "Carchi"],
                ["name" => "Chimborazo"],
                ["name" => "Cotopaxi"],
                ["name" => "El Oro"],
                ["name" => "Esmeraldas"],
                ["name" => "Galápagos"],
                ["name" => "Guayas"],
                ["name" => "Imbabura"],
                ["name" => "Loja"],
                ["name" => "Los Ríos"],
                ["name" => "Manabí"],
                ["name" => "Morona Santiago"],
                ["name" => "Napo"],
                ["name" => "Orellana"],
                ["name" => "Pastaza"],
                ["name" => "Pichincha"],
                ["name" => "Santa Elena"],
                ["name" => "Santo Domingo"],
                ["name" => "Sucumbíos"],
            ))
            ->create();

            $stations = [
                ['name' => 'Administraciòn Central', 'province_id' => 19],
                ['name' => 'Estación Experimental Santa Catalina', 'province_id' => 19],
                ['name' => 'Estación Experimental Tropical Pichilingue', 'province_id' => 13],
                ['name' => 'Estación Experimental Portoviejo', 'province_id' => 14],
                ['name' => 'Estación Experimental Santo Domingo', 'province_id' => 21],
                ['name' => 'Estación Experimental Austro', 'province_id' => 11],
                ['name' => 'Estación Experimental Central De La Amazonia', 'province_id' => 17],
                ['name' => 'Estación Experimental Litoral Del Sur', 'province_id' => 10],
            ];

            foreach ($stations as $station) {
                ExperimentalStation::create($station);
            }
        }
}
