<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainingCenter extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany('App\Models\courses');
    }
}
