<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modality extends Model
{
    use HasFactory;

    protected $table = 'modalities';
    protected $fillable = [
        'name'
    ];

    public function regimen(){
        return $this->belongsTo(Regimen::class);
    }

    public function modality(){
        return $this->hasMany(ModalityType::class);
    }
}
