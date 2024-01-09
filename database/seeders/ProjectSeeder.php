<?php

namespace Database\Seeders;

use App\Models\TypeProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeProjects = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($typeProjects as $typeProject) {
            TypeProject::create($typeProject);
        }
    }
}
