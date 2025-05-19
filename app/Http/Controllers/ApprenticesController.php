<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticesController extends Controller
{
    /**
     * Mostrar una lista de aprendices con sus cursos y computadoras.
     */
    public function index()
    {
        $apprentices = Apprentice::with(['course', 'computer'])->get();
        return response()->json($apprentices);
    }

    /**
     * Mostrar un aprendiz específico por ID con su curso y computadora.
     */
    public function show($id)
    {
        $apprentice = Apprentice::with(['course', 'computer'])->find($id);

        if (!$apprentice) {
            return response()->json(['mensaje' => 'Aprendiz no encontrado'], 404);
        }

        return response()->json($apprentice);
    }

    /**
     * Crear un nuevo aprendiz.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:apprentices,email',
            'cell_number' => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'nullable|exists:computers,id',
        ]);

        $apprentice = Apprentice::create($validatedData);

        return response()->json(['mensaje' => 'Aprendiz creado exitosamente', 'aprendiz' => $apprentice], 201);
    }

    /**
     * Actualizar un aprendiz existente.
     */
    public function update(Request $request, $id)
    {
        $apprentice = Apprentice::find($id);

        if (!$apprentice) {
            return response()->json(['mensaje' => 'Aprendiz no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:apprentices,email,' . $id,
            'cell_number' => 'sometimes|required|string|max:20',
            'course_id' => 'sometimes|required|exists:courses,id',
            'computer_id' => 'nullable|exists:computers,id',
        ]);

        $apprentice->update($validatedData);

        return response()->json(['mensaje' => 'Aprendiz actualizado exitosamente', 'aprendiz' => $apprentice]);
    }

    /**
     * Eliminar un aprendiz.
     */
    public function destroy($id)
    {
        $apprentice = Apprentice::find($id);

        if (!$apprentice) {
            return response()->json(['mensaje' => 'Aprendiz no encontrado'], 404);
        }

        $apprentice->delete();

        return response()->json(['mensaje' => 'Aprendiz eliminado exitosamente']);
    }
}
