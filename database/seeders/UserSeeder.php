<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
            'dni' => 1725581506,
            'name' => 'Jose',
            'email' => 'Jose',
            'birthDate' => '15/01/2024',
            'hiteDate' => '15/01/2024',
            'contributionNumber' => 1,
            'senescytRegistrationNumber' => 'Jose',
            'academicTitle' => 'Jose',
            'institutionalPhone' => 'Jose',
            'esigefActivity' => 'Jose',
            'salary' => 400,
            'password' => 'Jose',
            'returnedMigrant' => true,
            'gender' => true,
            'transportation' => true,
            'nationality_id' => 1,
            'ethnic_id' => 1,
            'academicFormation_id' => 1,
            'position_id' => 1,
            'fund_id' => 1,
            'regimen_id' => 1,
            'process_id' => 1,
            'associated_location_id' => 1,

            ],
            [
            'dni' => 1725581501,
            'name' => 'Jose',
            'email' => 'Jose1',
            'birthDate' => '15/01/2024',
            'hiteDate' => '15/01/2024',
            'contributionNumber' => 1,
            'senescytRegistrationNumber' => 'Jose',
            'academicTitle' => 'Jose',
            'institutionalPhone' => 'Jose',
            'esigefActivity' => 'Jose',
            'salary' => 400,
            'password' => 'Jose',
            'returnedMigrant' => true,
            'gender' => true,
            'transportation' => true,
            'nationality_id' => 1,
            'ethnic_id' => 1,
            'academicFormation_id' => 1,
            'position_id' => 1,
            'fund_id' => 1,
            'regimen_id' => 1,
            'process_id' => 1,
            'associated_location_id' => 1,

            ],
            [
            'dni' => 1725581502,
            'name' => 'Jose',
            'email' => 'Jose2',
            'birthDate' => '15/01/2024',
            'hiteDate' => '15/01/2024',
            'contributionNumber' => 1,
            'senescytRegistrationNumber' => 'Jose',
            'academicTitle' => 'Jose',
            'institutionalPhone' => 'Jose',
            'esigefActivity' => 'Jose',
            'salary' => 400,
            'password' => 'Jose',
            'returnedMigrant' => true,
            'gender' => true,
            'transportation' => true,
            'nationality_id' => 1,
            'ethnic_id' => 1,
            'academicFormation_id' => 1,
            'position_id' => 1,
            'fund_id' => 1,
            'regimen_id' => 1,
            'process_id' => 1,
            'associated_location_id' => 1,

            ],
            [
            'dni' => 1725581503,
            'name' => 'Jose',
            'email' => 'Jose3',
            'birthDate' => '15/01/2024',
            'hiteDate' => '15/01/2024',
            'contributionNumber' => 1,
            'senescytRegistrationNumber' => 'Jose',
            'academicTitle' => 'Jose',
            'institutionalPhone' => 'Jose',
            'esigefActivity' => 'Jose',
            'salary' => 400,
            'password' => 'Jose',
            'returnedMigrant' => true,
            'gender' => true,
            'transportation' => true,
            'nationality_id' => 1,
            'ethnic_id' => 1,
            'academicFormation_id' => 1,
            'position_id' => 1,
            'fund_id' => 1,
            'regimen_id' => 1,
            'process_id' => 1,
            'associated_location_id' => 1,

            ],

        ];

        foreach ($users as $user) {
            User::create($user);

        }

    }
}
