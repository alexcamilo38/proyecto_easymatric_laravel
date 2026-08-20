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

        return view('grades.index', compact('grades'));
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
       return Grade::create($request->all());
    }

    public function show($id)
    {
        $grades = Grade::find($id);

        return view('grades.show', compact('grades'));
    }

    public function edit(Grade $grades)
    {
        // Traemos todos los registros de las tablas foráneas
        $subjects = Subject::all();
        $students = Student::all();

        // Enviamos todo a la vista con compact
        return view('grades.edit', compact('grades', 'subjects', 'students'));
    }

    public function update(Request $request, Grade $grades)
    {
        // Método más sencillo sin necesidad de poner todo lo que pertenece a esa tabla
        $grades->update($request->all());

        return redirect()->route('grades.index');
    }

    // Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Grade $grades)
    {
        $grades->delete();

        return redirect()->route('grades.index');
    }

}
