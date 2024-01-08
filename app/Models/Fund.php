<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;

    protected $table = 'funds';
    protected $fillable = [
        'name'
    ];

    public function funds(){
        return $this->hasMany(InvestmentProject::class);
    }

    public function fundUser(){
        return $this->hasMany(User::class);
    }
}
