<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computers extends Model
{
    public function computer(){
        return $this->hasoOne(computers::class);
    }


}
