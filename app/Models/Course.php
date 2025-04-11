<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Teacher;
use App\Models\TrainingCenter;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'duration_hours',
        'start_date',
        'end_date',
        'status',
        'training_center_id'
    ];

    // Relación 1:n con Apprentice
    public function apprentices(): HasMany
    {
        return $this->hasMany(Apprentice::class);
    }

    // Relación n:n con Teacher (tabla pivot course_teacher)
    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class)
            ->withTimestamps();
    }

    // Relación n:1 con TrainingCenter
    public function trainingCenter(): BelongsTo
    {
        return $this->belongsTo(TrainingCenter::class);
    }
}
