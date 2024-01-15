<?php

namespace Database\Seeders;

use App\Models\TypeProject;
use App\Models\Project;
use App\Models\ActivityProject;
use App\Models\Component;
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

        $activitysProjects = [
            ['name' => 'Mejoramiento genético de cultivos',
            'observation' => 'lorem',
            'user_id' => 2,
            'typePoa_id'=> 2
            ]
        ];

        foreach ($activitysProjects as $activityProject) {
            ActivityProject::create($activityProject);
        }

        
        $components = [
            ['name' => 'Mejoramiento genético de cultivos','activity_id' => 1],
            ['name' => 'Mejoramiento genético de animales','activity_id' => 1],
            ['name' => 'Manejo integrado de plagas y enfermedades','activity_id' => 1],
            ['name' => 'Seguridad alimentaria y nutricional','activity_id' => 1]
        ];

        foreach ($components as $component) {
            Component::create($component);
        }
        
        $projects = [
            ['title' => 'Mejoramiento genético de cultivos',
            'startDate' => '12/11/2022',
            'finalDate' => '12/11/2021',
            'typeProject_id' => 2,
            'user_id' => 2,
            'financing_id' => 2,
            'category_id' => 2,
            'area_id' => 2,
            'institution_id' => 2,
            'component_id' => 2,
            'associated_location_id' => 2,
            'subActivityPoa_id' => 2    
        ],
            
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }


    }

}
