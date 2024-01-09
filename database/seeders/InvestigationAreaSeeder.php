<?php

namespace Database\Seeders;

use App\Models\Investigation;
use App\Models\Area;
use App\Models\Departament;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class InvestigationAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $investigations = [
            ['name' => 'Mejoramiento genético de cultivos'],
            ['name' => 'Mejoramiento genético de animales'],
            ['name' => 'Manejo integrado de plagas y enfermedades'],
            ['name' => 'Seguridad alimentaria y nutricional']
        ];

        foreach ($investigations as $investigation) {
            Investigation::create($investigation);
        }

        $areas = [
            ['name' => 'Mejoramiento genético de cultivos', 'investigation_id' => 1],
            ['name' => 'Mejoramiento genético de animales', 'investigation_id' => 2],
            ['name' => 'Manejo integrado de plagas y enfermedades', 'investigation_id' => 2],
            ['name' => 'Seguridad alimentaria y nutricional', 'investigation_id' => 4]
        ];

        foreach ($areas as $area) {
            Area::create($area);
        }

        $categorys = [
            ['name' => 'Lorem'],
            ['name' => 'Lorem'],
            ['name' => 'Lorem'],
            ['name' => 'Lorem'],
        ];

        foreach ($categorys as $category) {
            
            Category::create($category);
        }

        $departaments = [
            ['name' => 'Lorem'],
            ['name' => 'Lorem'],
            ['name' => 'Lorem'],
            ['name' => 'Lorem'],
        ];

        foreach ($departaments as $departament) {
            
            Departament::create($departament);
        }
    }
}
