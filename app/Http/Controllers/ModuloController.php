<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function index()
    {
        $modulos =Modulo::all();
        return view('modulos.index', compact('modulos'));
    }

    public function create()
    {
        return view('modulos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:modulos',
            'nombre' => 'required',
        ]);

        Modulo::create($request->all());

        return redirect()->route('modulos.index')
                         ->with('success', 'Módulo creado exitosamente.');
    }

    public function show(Modulo $modulo)
    {
        return view('modulos.show', compact('modulo'));
    }

    public function edit(Modulo $modulo)
    {
        return view('modulos.edit', compact('modulo'));
    }

    public function update(Request $request, Modulo $modulo)
    {
        $request->validate([
            'codigo' => 'required|unique:modulos,codigo,' . $modulo->id,
            'nombre' => 'required',
        ]);

        $modulo->update($request->all());

        return redirect()->route('modulos.index')
                         ->with('success', 'Módulo actualizado exitosamente.');
    }

    public function destroy(Modulo $modulo)
    {
        $modulo->delete();

        return redirect()->route('modulos.index')
                         ->with('success', 'Módulo eliminado exitosamente.');
    }
}
