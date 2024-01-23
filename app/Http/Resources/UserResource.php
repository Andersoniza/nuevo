<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'dni'=> $this-> dni,
            'name'=> $this-> name,
            'email'=> $this-> email,
            'birthDate'=> $this-> birthDate,
            'hiteDate'=> $this-> hiteDate,
            'contributionNumber'=> $this-> contributionNumber,
            'senescytRegistrationNumber'=> $this-> senescytRegistrationNumber,
            'academicTitle'=> $this-> academicTitle,
            'institutionalPhone'=> $this-> institutionalPhone,
            'esigefActivity'=> $this-> esigefActivity,
            'salary'=> $this-> salary,
            'password'=> $this-> password,
            'returnedMigrant'=> $this-> returnedMigrant,
            'gender'=> $this-> gender,
            'transportation'=> $this-> transportation
        ];
    }
}
