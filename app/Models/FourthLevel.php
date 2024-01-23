<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthLevel extends Model
{
    use HasFactory;

    protected $table = 'fourthLevels';
    protected $fillable = [
        'name'
    ];

    public function fourth_levels()
    {
        return $this->hasMany(User::class);
    }
}
