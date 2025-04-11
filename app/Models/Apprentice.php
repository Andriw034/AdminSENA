<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Course;
use App\Models\Computer;
use App\Models\Teacher;
use App\Models\TrainingCenter;

class Apprentice extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_number',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'ficha',
        'start_date',
        'status',
        'course_id'
    ];

    // Relación 1:1 con Computer
    public function computer(): HasOne
    {
        return $this->hasOne(Computer::class);
    }

    // Relación n:1 con Course
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
