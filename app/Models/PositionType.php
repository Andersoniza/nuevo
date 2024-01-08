<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionType extends Model
{
    use HasFactory;

    protected $table = 'position_types';
    protected $fillable = [
        'name'
    ];

    public function position(){
        return $this->hasMany(Position::class);
    }
}
