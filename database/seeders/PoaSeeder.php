<?php

namespace Database\Seeders;
use App\Models\SubActivityPoa;
use App\Models\State;
use App\Models\SubExtraPoa;
use App\Models\GeneralActivityPoa;
use App\Models\ExtraPoa;
use App\Models\IndicatorPoa;
use App\Models\TypePoa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class PoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typePoas = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($typePoas as $typePoa) {
            TypePoa::create($typePoa);
        }
        //
        $indicatorsPoas = [
            ['title' => 'Mejoramiento genético de cultivos'],
            ['title' => 'Mejoramiento genético de animales'],
            ['title' => 'Manejo integrado de plagas y enfermedades'],
            ['title' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($indicatorsPoas as $indicatorPoa) {
            IndicatorPoa::create($indicatorPoa);
        }
        

        $extrasPoas = [
            ['name' => 'Mejoramiento genético de cultivos','typePoa_id' => 1],
            ['name' => 'Mejoramiento genético de cultivos','typePoa_id' => 2],
            ['name' => 'Mejoramiento genético de cultivos','typePoa_id' => 2],
            ['name' => 'Mejoramiento genético de cultivos','typePoa_id' => 1]
        ];

        foreach ($extrasPoas as $extraPoa) {
            ExtraPoa::create($extraPoa);

        }
        
        $subExtrasPoas = [
            ['name' => 'Mejoramiento genético de cultivos','extraPoa_id' => 1],
            ['name' => 'Mejoramiento genético de cultivos','extraPoa_id' => 2],
            ['name' => 'Mejoramiento genético de cultivos','extraPoa_id' => 2],
            ['name' => 'Mejoramiento genético de cultivos','extraPoa_id' => 1]
        ];

        foreach ($subExtrasPoas as $subExtraPoa) {
            SubExtraPoa::create($subExtraPoa);

        }
        $states = [
            ['name' => 'Mejoramiento genético de cultivos','typePoa_id' => 1],
            ['name' => 'Mejoramiento genético de cultivos','typePoa_id' => 2],
            ['name' => 'Mejoramiento genético de cultivos','typePoa_id' => 2],
            ['name' => 'Mejoramiento genético de cultivos','typePoa_id' => 1]
        ];

        foreach ($states as $state) {
            State::create($state);

        }
        
        $generalActivitysPoas = [
            ['title' => 'Mejoramiento genético de cultivos',
            
            'startDate'=> '17/12/2021',
            'finalDate'=> '17/11/2024',
            'indicatorPoa_id' => 1,
            'activityPei_id' => 2,
            'user_id' => 1,
            'experimentalStation_id' => 1
        ],

        ];

        foreach ($generalActivitysPoas as $generalActivityPoa) {
            GeneralActivityPoa::create($generalActivityPoa);

        }
        



        $subActivitysPoas = [
            ['title' => 'Mejoramiento genético de cultivos','generalActivity_id' => 1,'user_id' => 1,'typePoa_id' => 1],
            ['title' => 'Mejoramiento genético de cultivos','generalActivity_id' => 1,'user_id' => 1,'typePoa_id' => 1],
            ['title' => 'Mejoramiento genético de cultivos','generalActivity_id' => 1,'user_id' => 1,'typePoa_id' => 1],
            ['title' => 'Mejoramiento genético de cultivos','generalActivity_id' => 1,'user_id' => 1,'typePoa_id' => 1]
        ];

        foreach ($subActivitysPoas as $subActivityPoa) {
            SubActivityPoa::create($subActivityPoa);

        }

    }
}
