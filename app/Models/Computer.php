<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Apprentice;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial_number',
        'brand',
        'model',
        'processor',
        'ram',
        'storage',
        'operating_system',
        'status',
        'last_maintenance',
        'apprentice_id'
    ];

    public function apprentice(): BelongsTo
    {
        return $this->belongsTo(Apprentice::class);
    }
}
