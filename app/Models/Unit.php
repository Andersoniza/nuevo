<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';
    protected $fillable = [
        'name'
    ];

    public function process(){
        return $this->belongsTo(Process::class);
    }

    public function unit(){
        return $this->hasMany(Management::class);
    }
}
