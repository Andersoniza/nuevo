<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityProject extends Model
{
    use HasFactory;

    protected $table = 'activitysProjects';
    protected $fillable = [
        'name',
        'observation'
    ];

    public function component()
    {
        return $this->belongsTo(Component::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function typeProject()
    {
        return $this->belongsTo(typeProject::class);
    }
}
