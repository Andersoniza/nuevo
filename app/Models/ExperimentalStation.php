<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperimentalStation extends Model
{
    use HasFactory;

    protected $table = 'experimental_stations';
    protected $fillable = [
        'name'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function associatedLocation(){
        return $this->belongsTo(AssociatedLocation::class);
    }
}
