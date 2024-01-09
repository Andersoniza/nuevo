<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categorys';
    protected $fillable = [
        'name'
    ];

    public function objectivePei()
    {
        return $this->hasMany(ObjectivePei::class);
    }
}
