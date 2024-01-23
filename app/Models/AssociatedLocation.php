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
        return $this->belongsTo(ExperimentalStation::class);
    }

    public function associated_location(){
        return $this->hasMany(User::class);
    }
}
