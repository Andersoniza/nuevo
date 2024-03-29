<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    use HasFactory;

    protected $table = 'regimenes';
    protected $fillable = [
        'name'
    ];

    public function regimen(){
        return $this->hasMany(Modality::class);
    }

    public function regimenUser(){
        return $this->hasMany(User::class);
}
}
