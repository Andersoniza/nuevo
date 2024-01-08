<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;

    protected $table = 'managements';
    protected $fillable = [
        'name'
    ];

    public function process(){
        return $this->belongsTo(Unit::class);
    }

    public function management(){
        return $this->hasMany(AreaTa::class);
    }
}
