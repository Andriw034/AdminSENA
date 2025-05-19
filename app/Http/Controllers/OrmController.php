<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Teacher;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Apprentice;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    /**
     * Obtener todos los registros de Areas.
     */
    public function getAreas()
    {
        $areas = Area::all();
        return response()->json($areas);
    }

    /**
     * Obtener todos los registros de Teachers.
     */
    public function getTeachers()
    {
        $teachers = Teacher::all();
        return response()->json($teachers);
    }

    /**
     * Obtener todos los registros de Computers.
     */
    public function getComputers()
    {
        $computers = Computer::all();
        return response()->json($computers);
    }

    /**
     * Obtener todos los registros de Courses.
     */
    public function getCourses()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    /**
     * Obtener todos los registros de Apprentices.
     */
    public function getApprentices()
    {
        $apprentices = Apprentice::all();
        return response()->json($apprentices);
    }
}
