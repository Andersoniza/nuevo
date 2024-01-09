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
            'name' => 'Jose'

            ],
            [
            'name' => 'Alex'

            ],
            [
            'name' => 'Luisa'

            ]

        ];

        foreach ($users as $user) {
            User::create($user);

        }

    }
}
