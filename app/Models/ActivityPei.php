<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityPei extends Model
{
    use HasFactory;

    protected $table = 'activitysPeis';
    protected $fillable = [
        'title'
    ];

    public function objectivePei()
    {
        return $this->belongsTo(ObjectivePei::class);
    }
    public function resultPei()
    {
        return $this->belongsTo(ResultPei::class);
    }
    public function typePei()
    {
        return $this->belongsTo(TypePei::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
