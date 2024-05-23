<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        $modulos = Modulo::all();
        return view('alumnos.create', compact('modulos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'expediente' => 'required|unique:alumnos',
            'nombre' => 'required',
            'apellidos' => 'required',
        ]);

        $alumno = Alumno::create($request->all());
        $alumno->modulos()->attach($request->modulos);
        
        return redirect()->route('alumnos.index');
    }

    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    public function edit(Alumno $alumno)
    {
        $modulos = Modulo::all();
        return view('alumnos.edit', compact('alumno', 'modulos'));
    }

    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'expediente' => 'required|unique:alumnos,expediente,'.$alumno->id,
            'nombre' => 'required',
            'apellidos' => 'required',
        ]);

        $alumno->update($request->all());
        $alumno->modulos()->sync($request->modulos);

        return redirect()->route('alumnos.index');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
