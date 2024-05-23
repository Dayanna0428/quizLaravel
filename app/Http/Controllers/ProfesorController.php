<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }

    public function create()
    {
        return view('profesores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|unique:profesores',
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        Profesor::create($request->all());

        return redirect()->route('profesores.index')
                         ->with('success', 'Profesor creado exitosamente.');
    }

    public function show(Profesor $profesor)
    {
        return view('profesores.show', compact('profesor'));
    }

    public function edit(Profesor $profesor)
    {
        return view('profesores.edit', compact('profesor'));
    }

    public function update(Request $request, Profesor $profesor)
    {
        $request->validate([
            'dni' => 'required|unique:profesores,dni,' . $profesor->id,
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        $profesor->update($request->all());

        return redirect()->route('profesores.index')
                         ->with('success', 'Profesor actualizado exitosamente.');
    }

    public function destroy(Profesor $profesor)
    {
        $profesor->delete();

        return redirect()->route('profesores.index')
                         ->with('success', 'Profesor eliminado exitosamente.');
    }
}


