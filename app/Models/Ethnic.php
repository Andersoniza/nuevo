<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ethnic extends Model
{
    use HasFactory;

    protected $table = 'ethnicities';
    protected $fillable = [
        'name'
    ];

    public function ethnicUser(){
        return $this->hasMany(User::class);
    }
}
