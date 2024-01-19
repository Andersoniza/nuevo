<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultPei extends Model
{
    use HasFactory;

    protected $table = 'resultsPeis';
    protected $fillable = [
        'name'
    ];

    public function activityPei()
    {
        return $this->hasMany(ActivityPei::class);
    }
}
