<?php

namespace Database\Seeders;

use App\Models\TypeFinancing;
use App\Models\Institution;
use App\Models\Financing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class FinancingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeFinancings = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($typeFinancings as $typeFinancing) {
            TypeFinancing::create($typeFinancing);
        }
        
        $institutions = [
            ['name' => 'Mejoramiento genético de cultivos',
        'ruc'=> 1225581506,
        'phone' => 987560731,
        'email' => 'jose@gmail.com',
        'direction' => 'el Condado'
            ],
            ['name' => 'Mejoramiento genético de cultivos',
        'ruc'=> 1225581506,
        'phone' => 987560731,
        'email' => 'jose@gmail.com',
        'direction' => 'el Condado'
            ],
            ['name' => 'Mejoramiento genético de cultivos',
        'ruc'=> 1225581506,
        'phone' => 987560731,
        'email' => 'jose@gmail.com',
        'direction' => 'el Condado'
            ],

        ];

        foreach ($institutions as $institution) {
            Institution::create($institution);
        }

        $financings = [
            ['amount' => 4356 , 'typeFinancing_id' => 1 , 'institution_id' => 1],
            ['amount' => 435346 , 'typeFinancing_id' => 2 , 'institution_id' => 1],
            ['amount' => 21456 , 'typeFinancing_id' => 2 , 'institution_id' => 2],
            ['amount' => 326546 , 'typeFinancing_id' => 4 , 'institution_id' => 2],

        ];

        foreach ($financings as $financing) {
            Financing::create($financing);
        }
    }
}
