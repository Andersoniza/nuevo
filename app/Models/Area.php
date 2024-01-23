<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $fillable = [
        'name'
    ];

    public function investigation()
    {
        return $this->belongsTo(Investigacion::class);
    }

    public function area()
    {
        return $this->hasMany(User::class);
    }
}
