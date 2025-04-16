<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas()
    {
        $apprentices = Apprentice::with(['course', 'computer'])->get();
        $courses = Course::with(['apprentices', 'teachers'])->get();
        $teachers = Teacher::with(['courses', 'area', 'trainingCenter'])->get();
        $areas = Area::with(['courses', 'teachers'])->get();
        $trainingCenters = TrainingCenter::with(['courses', 'teachers'])->get();

        return response()->json([
            'apprentices' => $apprentices,
            'courses' => $courses,
            'teachers' => $teachers,
            'areas' => $areas,
            'trainingCenters' => $trainingCenters,
        ]);
    }
}
