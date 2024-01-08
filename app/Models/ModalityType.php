<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalityType extends Model
{
    use HasFactory;

    protected $table = 'modality_types';
    protected $fillable = [
        'name'
    ];

    public function modality(){
        return $this->belongsTo(Modality::class);
    }
}
