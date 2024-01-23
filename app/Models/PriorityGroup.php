<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriorityGroup extends Model
{
    use HasFactory;

    protected $table = 'priorityGroups';
    protected $fillable = [
        'name'
    ];

    public function priority()
    {
        return $this->hasMany(User::class);
    }
}
