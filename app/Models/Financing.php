<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financing extends Model
{
    use HasFactory;

    protected $table = 'financings';
    protected $fillable = [
        'amount'
    ];

    public function typeFinancing()
    {
        return $this->belongsTo(TypeFinancing::class);
    }
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
