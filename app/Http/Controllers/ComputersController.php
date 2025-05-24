<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputersController extends Controller
{
    // Mostrar la lista de computadoras
    public function index()
    {
        $computers = Computer::all();
        return view('computers.index', compact('computers'));
    }

    // Mostrar el formulario para crear una nueva computadora
    public function create()
    {
        return view('computers.create');
    }

    // Guardar una nueva computadora en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:computers,name',
            'brand' => 'required',
        ]);

        Computer::create($request->all());

        return redirect()->route('computers.index')
                         ->with('success', 'Computadora creada exitosamente.');
    }

    // Mostrar los detalles de una computadora específica
    public function show(Computer $computer)
    {
        return view('computers.show', compact('computer'));
    }

    // Mostrar el formulario para editar una computadora existente
    public function edit(Computer $computer)
    {
        return view('computers.edit', compact('computer'));
    }

    // Actualizar una computadora en la base de datos
    public function update(Request $request, Computer $computer)
    {
        $request->validate([
            'name' => 'required|unique:computers,name,' . $computer->id,
            'brand' => 'required',
        ]);

        $computer->update($request->all());

        return redirect()->route('computers.index')
                         ->with('success', 'Computadora actualizada exitosamente.');
    }

    // Eliminar una computadora de la base de datos
    public function destroy(Computer $computer)
    {
        $computer->delete();

        return redirect()->route('computers.index')
                         ->with('success', 'Computadora eliminada exitosamente.');
    }
}
