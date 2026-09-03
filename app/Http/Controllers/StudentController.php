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
        return view('students.index', compact('students'));
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
        Student::create($request->all());
       return redirect()->route('students.index')->with('success', 'Estudiante registrado exitosamente');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $userSystems = UserSystem::all();
        $guardians = Guardian::all();
        $institutions = Institution::all();

        return view('students.edit', compact('student', 'userSystems', 'guardians', 'institutions'));
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
