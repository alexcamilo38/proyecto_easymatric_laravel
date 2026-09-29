<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    //
    public function index()
    {
        $modules = Module::all();

        return response()->json($modules);
    }

    public function create()
    {
        // Llamamos a todos los profesores sin necesidad de escribir uno por uno
        $teachers = Teacher::all();

        return view('modules.create', compact('teachers'));
    }

    public function salida(Request $request)
    {
       $modules=Module::create($request->all());
       //return redirect()->route('modules.index')->with('success', 'Módulo registrado exitosamente');
       return response()->json($modules);

    }

    public function show($id)
    {
        $modules = Module::find($id);

        return response()->json($modules);
    }

    public function edit(Module $modules)
    {
        // Traemos todos los registros de la tabla foránea
        $teachers = Teacher::all();

        // Enviamos todo a la vista con compact
        return response()->json(compact('modules', 'teachers'));
    }

    public function update(Request $request, Module $modules)
    {
        // Método más sencillo sin necesidad de poner todo lo que pertenece a esa tabla
        $modules->update($request->all());

        return response()->json($modules);
    }

    // Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Module $modules)
    {
        $modules->delete();

        return response()->json($modules);
    }
}
