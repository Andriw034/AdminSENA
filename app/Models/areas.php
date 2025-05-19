<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;

    protected $table = 'areas';

    protected $fillable = [
        'name',
    ];

    public function teachers()
    {
        return $this->hasMany(Teachers::class, 'area_id');
    }

    public function courses()
    {
        return $this->hasMany(Courses::class, 'area_id');
    }
}
