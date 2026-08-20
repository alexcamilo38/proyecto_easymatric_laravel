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

        return view('teachers.index',compact('teachers'));


    }

    public function create(){
        //llamamos a todos sin necesidad de escribir uno por uno
        $userSystems=UserSystem::all(); 
        $institutions=Institution::all(); 
        return view('teachers.create',compact('userSystems', 'institutions'));
    }

    public function salida(Request $request){
        Teacher::create($request->all());
    }

    public function show ($id){

        $teacher=Teacher::find($id);
        return view('teachers.show',compact('teacher'));


    }

    public function edit(Teacher $teacher)
    {
        // Traemos todos los registros de las tablas foráneas
        $userSystems = UserSystem::all(); 
        $institutions = Institution::all(); 

        // Enviamos todo a la vista con compact
        return view('teachers.edit', compact('teacher', 'userSystems', 'institutions'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $teacher->update($request->all());

        return redirect()->route('teachers.index');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
