<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Computer;

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

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function computer()
    {
        return $this->hasOne(Computer::class);
    }
}
