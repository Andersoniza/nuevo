<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'dni',
        'name',
        'email',
        'birthDate',
        'hiteDate',
        'contributionNumber',
        'senescytRegistrationNumber',
        'academicTitle',
        'institutionalPhone',
        'esigefActivity',
        'salary',
        'password',
        'returnedMigrant',
        'gender',
        'transportation'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function nationalityUser(){
        return $this->belongsTo(Nationality::class);
    }

    public function ethnicUser(){
        return $this->belongsTo(Ethnic::class);
    }

    public function academicUser(){
        return $this->belongsTo(AcademicFormation::class);
    }

    public function positionUser(){
        return $this->belongsTo(Position::class);
    }

    public function fundUser(){
        return $this->belongsTo(Fund::class);
    }

    public function regimenUser(){
        return $this->belongsTo(Regimen::class);
    }

    public function associatedUser(){
        return $this->belongsTo(AssociatedLocation::class);
    }
}
