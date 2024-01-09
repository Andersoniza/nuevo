<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = [
        'title',
        'startDate', 
        'finalDate'
    ];

    public function typeProject()
    {
        return $this->belongsTo(TypeProject::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function financing()
    {
        return $this->belongsTo(Financing::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
    public function associatedLocation()
    {
        return $this->belongsTo(AssociatedLocation::class);
    }
    public function subActivityPoa()
    {
        return $this->belongsTo(subActivityPoa::class);
    }
}
