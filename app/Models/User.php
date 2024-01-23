<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users';
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
    public function nationality(){
        return $this->belongsTo(Nationality::class);
    }

    public function ethnic(){
        return $this->belongsTo(Ethnic::class);
    }

    public function academic_formation(){
        return $this->belongsTo(AcademicFormation::class);
    }

    public function position(){
        return $this->belongsTo(Position::class);
    }

    public function fund(){
        return $this->belongsTo(Fund::class);
    }

    public function regimen(){
        return $this->belongsTo(Regimen::class);
    }

    public function process(){
        return $this->belongsTo(Process::class);
    }

     public function associated_location(){
        return $this->belongsTo(AssociatedLocation::class);
    }

    public function priority()
    {
        return $this->belongsTo(PriorityGroup::class);
    }

    public function fourth_levels()
    {
        return $this->belongsTo(FourthLevel::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function area_ta()
    {
        return $this->belongsTo(AreaTa::class);
    }

    public function management()
    {
        return $this->belongsTo(Management::class);
    }

}
