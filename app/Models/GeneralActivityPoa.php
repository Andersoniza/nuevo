<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralActivityPoa extends Model
{
    use HasFactory;
    protected $table = 'generalActivitysPoas';
    protected $fillable = [
        'title', 'startDate', 'finalDate'
    ];

    public function indicatorPoa()
    {
        return $this->belongsTo(IndicatorPoa::class);
    }
    public function activityPei()
    {
        return $this->belongsTo(ActivityPei::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function experimentalStation()
    {
        return $this->belongsTo(ExperimentalStation::class);
    }
}
