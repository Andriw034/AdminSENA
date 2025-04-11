<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentices extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo('App\Models\courses');
    }

    public function computer()
    {
        return $this->hasOne('App\Models\computers');
    }
}
