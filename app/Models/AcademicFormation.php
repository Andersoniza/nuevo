<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicFormation extends Model
{
    use HasFactory;

    protected $table = 'academic_formations';
    protected $fillable = [
        'name'
    ];

    public function academicUser(){
        return $this->hasMany(User::class);
    }
}
