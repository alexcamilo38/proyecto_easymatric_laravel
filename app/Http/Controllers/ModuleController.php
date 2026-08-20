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

        return view('modules.index', compact('modules'));
    }

    public function create()
    {
        // Llamamos a todos los profesores sin necesidad de escribir uno por uno
        $teachers = Teacher::all();

        return view('modules.create', compact('teachers'));
    }

    public function salida(Request $request)
    {
       return  Module::create($request->all());
    }

    public function show($id)
    {
        $modules = Module::find($id);

        return view('modules.show', compact('modules'));
    }

    public function edit(Module $modules)
    {
        // Traemos todos los registros de la tabla foránea
        $teachers = Teacher::all();

        // Enviamos todo a la vista con compact
        return view('modules.edit', compact('modules', 'teachers'));
    }

    public function update(Request $request, Module $modules)
    {
        // Método más sencillo sin necesidad de poner todo lo que pertenece a esa tabla
        $modules->update($request->all());

        return redirect()->route('modules.index');
    }

    // Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Module $modules)
    {
        $modules->delete();

        return redirect()->route('modules.index');
    }
}
