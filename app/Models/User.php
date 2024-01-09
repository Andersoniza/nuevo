<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        //'dni',
        'name',
        //'email',
        //'birthDate',
       // 'hiteDate',
       // 'contributionNumber',
        //'senescytRegistrationNumber',
       // 'academicTitle',
        //'institutionalPhone',
       // 'esigefActivity',
      //  'salary',
       //'password',
       // 'returnedMigrant',
       // 'gender',
       // 'transportation'
    ];
/*
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function activityProject(){
        return $this->hasMany(ActivityProject::class);
    }
    public function subActivityPoa(){
        return $this->hasMany(SubActivityPoa::class);
    }
    public function project(){
        return $this->hasMany(Project::class);
    }
    public function objectivePei(){
        return $this->hasMany(ObjectivePei::class);
    }
    public function generalActivityPoa(){
        return $this->hasMany(GeneralActivityPoa::class);
    }
    public function activityPei(){
        return $this->hasMany(ActivityPei::class);
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
    */
}
