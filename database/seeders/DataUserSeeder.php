<?php

namespace Database\Seeders;

use App\Models\Nationality;

use App\Models\PositionType;
use App\Models\Process;
use App\Models\Fund;
use App\Models\Regimen;
use App\Models\AcademicFormation;
use App\Models\Ethnic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DataUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nationalities = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($nationalities as $nationality) {
            Nationality::create($nationality);
        }

        $ethnicities = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($ethnicities as $ethnic) {
            Ethnic::create($ethnic);
        }

        $academic_formations = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($academic_formations as $academic_formation) {
            AcademicFormation::create($academic_formation);
        }


        $position_types = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($position_types as $position_type) {
            PositionType::create($position_type);
        }

        $funds = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($funds as $fund) {
            Fund::create($fund);
        }

        $regimenes = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($regimenes as $regimen) {
            Regimen::create($regimen);
        }

        $processes = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($processes as $process) {
            Process::create($fund);
        }
        //
    }
}
