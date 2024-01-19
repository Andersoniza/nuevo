<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraPoa extends Model
{
    use HasFactory;

    protected $table = 'extrasPoas';
    protected $fillable = [
        'name'
    ];

    public function typePoa()
    {
        return $this->belongsTo(TypePoa::class);
    }
}
