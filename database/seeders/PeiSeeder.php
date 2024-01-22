<?php

namespace Database\Seeders;

use App\Models\ResultPei;
use App\Models\TypePei;
use App\Models\IndicatorPei;
use App\Models\ActivityPei;
use App\Models\ObjectivePei;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class PeiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $resultsPeis = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($resultsPeis as $resultPei) {
            ResultPei::create($resultPei);
        }
        //
        $indicatorsPeis = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($indicatorsPeis as $indicatorPei) {
            IndicatorPei::create($indicatorPei);
        }
        //
        $typesPeis = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($typesPeis as $typePei) {
            TypePei::create($typePei);
        }
        //
        $objectivesPeis = [
            ['title' => 'Mejoramiento genético de cultivos',
            'indicator_pei_id' => 1,
            'type_pei_id' => 2,
            'departament_id' => 2,
            'category_id' => 3,
            'area_id' => 2,
            'user_id' => 2],

            ['title' => 'Mejoramiento genético de cultivos',
            'indicator_pei_id' => 1,
            'type_pei_id' => 2,
            'departament_id' => 2,
            'category_id' => 3,
            'area_id' => 2,
            'user_id' => 2],

            ['title' => 'Mejoramiento genético de cultivos',
            'indicator_pei_id' => 1,
            'type_pei_id' => 2,
            'departament_id' => 2,
            'category_id' => 3,
            'area_id' => 2,
            'user_id' => 2],

        ];

        foreach ($objectivesPeis as $objectivePei) {
            ObjectivePei::create($objectivePei);
        }
        //

        $activitysPeis = [
            
            ['title' => 'Mejoramiento genético de cultivos',
            'objectivePei_id' => 1,
            'resultPei_id' => 2,
            'typePei_id' => 2,
            'user_id' => 2],
    
            ['title' => 'Mejoramiento genético de cultivos',
            'objectivePei_id' => 1,
            'resultPei_id' => 2,
            'typePei_id' => 2,
            'user_id' => 2],
    
            ['title' => 'Mejoramiento genético de cultivos',
            'objectivePei_id' => 1,
            'resultPei_id' => 2,
            'typePei_id' => 2,
            'user_id' => 2],
    
            
    
        ];
    
        foreach ($activitysPeis as $activityPei) {
            ActivityPei::create($activityPei);
        }
        //
    }
}
