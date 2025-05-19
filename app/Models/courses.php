<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    public function apprentices(){
        return $this->hasMany('App\Models\apprentices');
    }
    
    public function trainingCenter(){
        return $this->belongsTo('App\Models\trainingCenter');
    }
}