<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubArea extends Model
{
    use HasFactory;

    protected $table = 'subareas';
    protected $fillable = [
        'name'
    ];

    public function areata(){
        return $this->belongsTo(AreaTa::class);
    }
}
