<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubActivityPoa extends Model
{
    use HasFactory;
    protected $table = 'subActivitysPoas';
    protected $fillable = [
        'title'
    ];

    public function generalActivitysPoa()
    {
        return $this->belongsTo(GeneralActivityPoa::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function typePoa()
    {
        return $this->belongsTo(TypePoa::class);
    }
}
