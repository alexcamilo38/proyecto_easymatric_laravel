<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Module;
use App\Models\Requirement;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    //
    public function index()
    {
        $enrollments = Enrollment::all();

        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        // Llamamos a todos sin necesidad de escribir uno por uno
        $students = Student::all();
        $modules = Module::all();
        $requirements = Requirement::all();

        return view('enrollments.create', compact('students', 'modules', 'requirements'));
    }

    public function salida(Request $request)
    {
        Enrollment::create($request->all());
        return redirect()->route('enrollments.index')->with('success', 'Matrícula registrada con éxito');
    }

    public function show($id)
    {
        $enrollments = Enrollment::find($id);

        return view('enrollments.show', compact('enrollments'));
    }

    public function edit(Enrollment $enrollments)
    {
        // Traemos todos los registros de las tablas foráneas
        $students = Student::all();
        $modules = Module::all();
        $requirements = Requirement::all();

        // Enviamos todo a la vista con compact
        return view('enrollments.edit', compact('enrollments', 'students', 'modules', 'requirements'));
    }

    public function update(Request $request, Enrollment $enrollments)
    {
        // Método más sencillo sin necesidad de poner todo lo que pertenece a esa tabla
        $enrollments->update($request->all());

        return redirect()->route('enrollments.index');
    }

    // Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Enrollment $enrollments)
    {
        $enrollments->delete();

        return redirect()->route('enrollments.index');
    }
}
