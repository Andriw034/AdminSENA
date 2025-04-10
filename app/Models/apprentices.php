<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentices extends Model
{
    public function apprentices(){
    return $this->belongsTo(computers::class);
}
}
