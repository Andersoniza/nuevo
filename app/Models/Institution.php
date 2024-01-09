<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $table = 'institutions';
    protected $fillable = [
        'name', 'ruc' , 'phone', 'email', 'direction'
    ];

    public function financing()
    {
        return $this->hasMany(Financing::class);
    }
}
