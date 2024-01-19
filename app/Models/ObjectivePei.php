<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjectivePei extends Model
{
    use HasFactory;

    protected $table = 'objectivesPeis';
    protected $fillable = [
        'title'
    ];

    public function indicatorPei()
    {
        return $this->belongsTo(IndicatorPei::class);
    }
    public function typePei()
    {
        return $this->belongsTo(TypePei::class);
    }
    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
