<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubExtraPoa extends Model
{
    use HasFactory;
    protected $table = 'subExtrasPoas';
    protected $fillable = [
        'name'
    ];

    public function extraPoa()
    {
        return $this->belongsTo(ExtraPoa::class);
    }
}
