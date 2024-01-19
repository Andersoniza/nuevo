<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePei extends Model
{
    use HasFactory;

    protected $table = 'typesPeis';
    protected $fillable = [
        'name'
    ];

    public function objectivePei()
    {
        return $this->hasMany(ObjectivePei::class);
    }
}
