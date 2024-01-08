<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaTa extends Model
{
    use HasFactory;

    protected $table = 'areata';
    protected $fillable = [
        'name'
    ];

    public function management(){
        return $this->hasMany(Management::class);
    }

    public function areata(){
        return $this->hasMany(SubArea::class);
    }
}
