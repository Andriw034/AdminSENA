<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo('App\Models\areas');
    }

    public function trainingCenter()
    {
        return $this->belongsTo('App\Models\trainingCenter');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Models\teachers');
    }

    public function apprentices()
    {
        return $this->hasMany('App\Models\apprentices');
    }
}
