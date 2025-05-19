<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    use HasFactory;
    
    public function courses()
    {
        return $this->belongsToMany('App\Models\courses');
    }
    
    public function area()
    {
        return $this->belongsTo('App\Models\areas');
    }
    
    public function trainingCenter()
    {
        return $this->belongsTo('App\Models\trainingCenter');
    }
}
