<?php

namespace Database\Seeders;


use App\Models\InvestmentProject;
use App\Models\Position;
use App\Models\AssociatedLocation;
use App\Models\Unit;
use App\Models\SubArea;
use App\Models\Modality;
use App\Models\ModalityType;
use App\Models\AreaTa;
use App\Models\Management;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SonUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $investmentProjects = [
            ['name' => 'Mejoramiento genético de cultivos' ,
            'fund_id'=> 1],

            ['name' => 'Mejoramiento genético de cultivos' ,
            'fund_id'=> 1],

            ['name' => 'Mejoramiento genético de cultivos' ,
            'fund_id'=> 1],
        ];

        foreach ($investmentProjects as $investmentProject) {
            InvestmentProject::create($investmentProject);
        }

        $positions = [
            ['name' => 'Mejoramiento genético de cultivos',
            'positionType_id' => 1],

            ['name' => 'Mejoramiento genético de cultivos',
            'positionType_id' => 2],

            ['name' => 'Mejoramiento genético de cultivos',
            'positionType_id' => 3],

            ['name' => 'Mejoramieto genético de cultivos',
            'positionType_id' =>4],

        ];

        foreach ($positions as $position) {
            Position::create($position);
        }

        $units = [
            ['name' => 'Mejoramiento genético de cultivos',
            'process_id' => 1],

            ['name' => 'Mejoramiento genético de cultivos',
            'process_id' => 2],

            ['name' => 'Mejoramiento genético de cultivos',
            'process_id' => 1],

            ['name' => 'Mejoramieto genético de cultivos',
            'process_id' =>1],

        ];

        foreach ($units as $unit) {
            Unit::create($unit);
        }
        
        $managements = [
            ['name' => 'Mejoramiento genético de cultivos',
            'unit_id' => 1],

            ['name' => 'Mejoramiento genético de cultivos',
            'unit_id' => 2],

            ['name' => 'Mejoramiento genético de cultivos',
            'unit_id' => 3],

            ['name' => 'Mejoramieto genético de cultivos',
            'unit_id' =>1],

        ];

        foreach ($managements as $management) {
            Management::create($management);
        }

        $areasta = [
            ['name' => 'Mejoramiento genético de cultivos',
            'management_id' => 1],

            ['name' => 'Mejoramiento genético de cultivos',
            'management_id' => 2],

            ['name' => 'Mejoramiento genético de cultivos',
            'management_id' => 3],

            ['name' => 'Mejoramieto genético de cultivos',
            'management_id' =>4],

        ];

        foreach ($areasta as $areata) {
            AreaTa::create($areata);
        }

        $subAreas = [
            ['name' => 'Mejoramiento genético de cultivos',
            'area_id' => 1],

            ['name' => 'Mejoramiento genético de cultivos',
            'area_id' => 2],

            ['name' => 'Mejoramiento genético de cultivos',
            'area_id' => 3],

            ['name' => 'Mejoramieto genético de cultivos',
            'area_id' =>4],

        ];

        foreach ($subAreas as $subArea) {
            SubArea::create($subArea);
        }

        $modalitys = [
            ['name' => 'Mejoramiento genético de cultivos',
            'regimen_id' => 1],

            ['name' => 'Mejoramiento genético de cultivos',
            'regimen_id' => 2],

            ['name' => 'Mejoramiento genético de cultivos',
            'regimen_id' => 1],

            ['name' => 'Mejoramieto genético de cultivos',
            'regimen_id' =>1],

        ];

        foreach ($modalitys as $modality) {
            Modality::create($modality);
        }

        $modalityTypes = [
            ['name' => 'Mejoramiento genético de cultivos',
            'modality_id' => 1],

            ['name' => 'Mejoramiento genético de cultivos',
            'modality_id' => 2],

            ['name' => 'Mejoramiento genético de cultivos',
            'modality_id' => 3],

            ['name' => 'Mejoramieto genético de cultivos',
            'modality_id' =>4],

        ];

        foreach ($modalityTypes as $modalityType) {
            ModalityType::create($modalityType);
        }

        $associatedLocations = [
            ['acronym' => 'Mejoramiento genético de cultivos',
            'location' => 'Mejoramiento genético de cultivos',
            'adress' => 'Mejoramiento genético de cultivos',
            'station_id' => 1],
            ['acronym' => 'Mejoramiento genético de cultivos',
            'location' => 'Mejoramiento genético de cultivos',
            'adress' => 'Mejoramiento genético de cultivos',
            'station_id' => 1],
            ['acronym' => 'Mejoramiento genético de cultivos',
            'location' => 'Mejoramiento genético de cultivos',
            'adress' => 'Mejoramiento genético de cultivos',
            'station_id' => 1],

        ];

        foreach ($associatedLocations as $associatedLocation) {
            AssociatedLocation::create($associatedLocation);
        }

        
    }
}
