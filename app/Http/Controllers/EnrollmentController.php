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

        return response()->json($enrollments);
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
        $enrollments=Enrollment::create($request->all());
       //return redirect()->route('enrollments.index')->with('success', 'Matrícula registrada con éxito');
       return response()->json($enrollments);
    }

    public function show($id)
    {
        $enrollments = Enrollment::find($id);

        return response()->json($enrollments);
    }

    public function edit(Enrollment $enrollments)
    {
        // Traemos todos los registros de las tablas foráneas
        $students = Student::all();
        $modules = Module::all();
        $requirements = Requirement::all();

        // Enviamos todo a la vista con compact
        return response()->json(compact('enrollments', 'students', 'modules', 'requirements'));
    }

    public function update(Request $request, Enrollment $enrollments)
    {
        // Método más sencillo sin necesidad de poner todo lo que pertenece a esa tabla
        $enrollments->update($request->all());

        return response()->json($enrollments);
    }

    // Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Enrollment $enrollments)
    {
        $enrollments->delete();

        return response()->json($enrollments);
    }
}
