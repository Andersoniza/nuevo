<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePoa extends Model
{
    use HasFactory;

    protected $table = 'typesPoas';
    protected $fillable = [
        'name'
    ];

    public function extraPoa()
    {
        return $this->hasMany(ExtraPoa::class);
    }
    public function activityProject()
    {
        return $this->hasMany(ActivityProject::class);
    }
    public function state()
    {
        return $this->hasMany(State::class);
    }
    public function subActivityPoa()
    {
        return $this->hasMany(SubActivityPoa::class);
    }

}
