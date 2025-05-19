<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Apprentice;

class Computer extends Model
{
    use HasFactory;

    protected $table = 'computers';

    protected $fillable = [
        'number',
        'brand',
    ];

    public function apprentice()
    {
        return $this->hasOne(Apprentice::class, 'computer_id');
    }
}
