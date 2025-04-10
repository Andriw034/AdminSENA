<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    public function teachers(){
        return $this->belongsToMany(\courses::class);
    }
}
