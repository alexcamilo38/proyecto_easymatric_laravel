<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    //
    public function index()
    {
        $grades = Grade::all();

        return response()->json($grades);
    }

    public function create()
    {
        // Llamamos a todos sin necesidad de escribir uno por uno
        $subjects = Subject::all();
        $students = Student::all();

        return view('grades.create', compact('subjects', 'students'));
    }

    public function salida(Request $request)
    {
        $grades=Grade::create($request->all());

       //return redirect()->route('grades.index')->with('success', 'Calificación registrada exitosamente');
       return response()->json($grades);
    }

    public function show($id)
    {
        $grades = Grade::find($id);

        return response()->json($grades);
    }

    public function edit(Grade $grades)
    {
        // Traemos todos los registros de las tablas foráneas
        $subjects = Subject::all();
        $students = Student::all();

        // Enviamos todo a la vista con compact
        return response()->json(compact('grades', 'subjects', 'students'));
    }

    public function update(Request $request, Grade $grades)
    {
        // Método más sencillo sin necesidad de poner todo lo que pertenece a esa tabla
        $grades->update($request->all());

       return response()->json($grades);
    }

    // Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Grade $grades)
    {
        $grades->delete();

       return response()->json($grades);
    }

}
