<?php

namespace Database\Seeders;

use App\Models\FourthLevel;
use App\Models\Nationality;

use App\Models\Position;
use App\Models\PositionType;
use App\Models\PriorityGroup;
use App\Models\Process;
use App\Models\Fund;
use App\Models\Regimen;
use App\Models\AcademicFormation;
use App\Models\Ethnic;
use App\Models\Scale;
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
            ['name' => 'Ecuatoriano/a'],
            ['name' => 'Colombiano/a'],
            ['name' => 'Venezolano/a'],
            ['name' => 'Peruano/a']
        ];

        foreach ($nationalities as $nationality) {
            Nationality::create($nationality);
        }

        $ethnicities = [
            ['name' => 'AfroEcuatoriano'],
            ['name' => 'Blanco'],
            ['name' => 'Indigena'],
            ['name' => 'Mestizo'],
            ['name' => 'Montubio']
        ];

        foreach ($ethnicities as $ethnic) {
            Ethnic::create($ethnic);
        }

        $academic_formations = [
            ['name' => 'Sin Instrucción'],
            ['name' => 'Educación Basica'],
            ['name' => 'Bachiller'],
            ['name' => 'Egresado/a'],
            ['name' => 'Tercer Nivel'],
            ['name' => 'Estudiante Universitario Tercer Nivel'],
            ['name' => 'Técnico Superior / Tecnologia'],
        ];

        foreach ($academic_formations as $academic_formation) {
            AcademicFormation::create($academic_formation);
        }


        $position_types = [
            ['name' => 'Asesor'],
            ['name' => 'Directivo'],
            ['name' => 'Investigador'],
            ['name' => 'Personal de Apoyo'],
            ['name' => 'Personal de Servicio'],
            ['name' => 'Técnico I + D'],
            ['name' => 'Técnico I + D + i'],
        ];

        foreach ($position_types as $position_type) {
            PositionType::create($position_type);
        }

        $funds = [
            ['name' => '51'],
            ['name' => '71'],
        ];

        foreach ($funds as $fund) {
            Fund::create($fund);
        }

        $regimenes = [
            ['name' => 'Código de trabajo'],
            ['name' => 'Losep'],
        ];

        foreach ($regimenes as $regimen) {
            Regimen::create($regimen);
        }

        $processes = [
            ['name' => 'Adjetivo'],
            ['name' => 'Gobernante'],
            ['name' => 'Sustantivo'],
        ];

        foreach ($processes as $process) {
            Process::create($process);
        }

        $positions = [
            ['name' => 'Administrador'],
            ['name' => 'Asesor'],
            ['name' => 'Asistente'],
            ['name' => 'Auxiliar'],

        ];

        foreach ($positions as $position) {
            Position::create($position);
        }

        $groups = [
            ['name' => 'DIRECTOR '],
            ['name' => 'DISCAPACIDAD'],
            ['name' => 'EMBARAZO'],
            ['name' => 'LACTANCIA'],
            ['name' => 'MATERNIDAD'],
            ['name' => 'NINGUNO '],
            ['name' => 'SUSTITUTO'],
            ['name' => 'Vacante para financiar partida NJS de la DAF'],
            ['name' => 'Vacante por eliminar'],
            ['name' => 'Vacante']
        ];

        foreach ($groups as $group) {
            PriorityGroup::create($group);
        }

        $levels = [
            ['name' => 'Diplomado'],
            ['name' => 'Doctorado'],
            ['name' => 'Doctorado no equivalente a PHD'],
            ['name' => 'Maestria'],
            ['name' => 'No Aplica'],
        ];

        foreach ($levels as $level) {
            FourthLevel::create($level);
        }

        $scales = [
            ['name' => 'Nivel 1'],
            ['name' => 'Nivel 2'],
            ['name' => 'Nivel 3'],
            ['name' => 'Nivel 4'],
            ['name' => 'Nivel 5'],
            ['name' => 'Nivel 8'],
            ['name' => 'Nivel 9'],
            ['name' => 'NJS 1'],
            ['name' => 'NJS 2'],
            ['name' => 'NJS 5'],
            ['name' => 'NJS 9'],
        ];

        foreach ($scales as $scale) {
            Scale::create($scale);
        }

    }
}
