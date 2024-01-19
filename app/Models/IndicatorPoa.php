<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndicatorPoa extends Model
{
    use HasFactory;
    protected $table = 'indicatorsPoas';
    protected $fillable = [
        'title'
    ];

    public function generalActivityPoa()
    {
        return $this->hasMany(GeneralActivityPoa::class);
}
}
