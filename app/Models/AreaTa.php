<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaTa extends Model
{
    use HasFactory;

    protected $table = 'areas_ta';
    protected $fillable = [
        'name'
    ];

    public function area_ta()
    {
        return $this->hasMany(User::class);
    }
}
