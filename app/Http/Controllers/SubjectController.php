<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function index()
    {
        $subjects = Subject::all();

        return response()->json($subjects);
    }

    public function create()
    {
        // Llamamos a todos sin necesidad de escribir uno por uno
        $modules = Module::all();
        $teachers = Teacher::all();

        return view('subjects.create', compact('modules', 'teachers'));
    }

    public function salida(Request $request)
    {
        $subjects=Subject::create($request->all());
        //return redirect()->route('subjects.index')->with('success', 'Asignatura registrada exitosamente');
        return response()->json($subjects);
    }

    public function show($id)
    {
        $subjects = Subject::find($id);

        return response()->json($subjects);
    }

    public function edit(Subject $subjects)
    {
        // Traemos todos los registros de las tablas foráneas
        $modules = Module::all();
        $teachers = Teacher::all();

        // Enviamos todo a la vista con compact
        return response()->json(compact('subjects', 'modules', 'teachers'));
    }

    public function update(Request $request, Subject $subjects)
    {
        // Método más sencillo sin necesidad de poner todo lo que pertenece a esa tabla
        $subjects->update($request->all());

        return response()->json($subjects);
    }

    // Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Subject $subjects)
    {
        $subjects->delete();

        return response()->json($subjects);
    }
}
