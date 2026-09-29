<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use App\Models\Teacher;
use App\Models\UserSystem;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index(){

        $teachers=Teacher::all();

        return response()->json($teachers);


    }

    public function create(){
        //llamamos a todos sin necesidad de escribir uno por uno
        $userSystems=UserSystem::all(); 
        $institutions=Institution::all(); 
        return view('teachers.create',compact('userSystems', 'institutions'));
    }

    public function salida(Request $request){
        $teachers=Teacher::create($request->all());
        //return redirect()->route('teachers.index')->with('success', 'Profesor registrado exitosamente');
        return response()->json($teachers);

    }

    public function show ($id){

        $teacher=Teacher::find($id);
        return response()->json($teacher);


    }

    public function edit(Teacher $teacher)
    {
        // Traemos todos los registros de las tablas foráneas
        $userSystems = UserSystem::all(); 
        $institutions = Institution::all(); 

        // Enviamos todo a la vista con compact
       return response()->json(compact('teacher', 'userSystems', 'institutions'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $teacher->update($request->all());

        return response()->json($teacher);
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return response()->json($teacher);
    }
}
