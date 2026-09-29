<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use App\Models\Institution;
use App\Models\Student;
use App\Models\UserSystem;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::with(['userSystem', 'guardian', 'institution'])->get();
        return response()->json($students);
    }

    public function create()
    {
        $userSystems = UserSystem::all();
        $guardians = Guardian::all();
        $institutions = Institution::all();

        return view('students.create', compact('userSystems', 'guardians', 'institutions'));
    }

    public function salida(Request $request)
    {
        $students=Student::create($request->all());
       //return redirect()->route('students.index')->with('success', 'Estudiante registrado exitosamente');
        return response()->json($students);
    
    }

    public function show($id)
    {
        $student = Student::find($id);
        return response()->json($student);
    }

    public function edit(Student $student)
    {
        $userSystems = UserSystem::all();
        $guardians = Guardian::all();
        $institutions = Institution::all();

        return response()->json(compact('student', 'userSystems', 'guardians', 'institutions'));
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return response()->json($student);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json($student);
    }
}
