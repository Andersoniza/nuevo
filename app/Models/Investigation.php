<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    use HasFactory;

    protected $table = 'investigations';
    protected $fillable = [
        'name'
    ];

    public function areas()
    {
        return $this->hasMany(Areas::class);
    }
}
