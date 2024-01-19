<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeFinancing extends Model
{
    use HasFactory;

    protected $table = 'typesFinancings';
    protected $fillable = [
        'name'
    ];

    public function financing()
    {
        return $this->hasMany(Financing::class);
    }
}
