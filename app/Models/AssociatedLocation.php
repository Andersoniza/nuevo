<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociatedLocation extends Model
{
    use HasFactory;

    protected $table = 'associated_locations';
    protected $fillable = [
        'acronym',
        'location',
        'adress',
    ];

    public function associatedLocation(){
        return $this->hasMany(ExperimentalStation::class);
    }

    public function associatedUser(){
        return $this->hasMany(User::class);
    }
}
