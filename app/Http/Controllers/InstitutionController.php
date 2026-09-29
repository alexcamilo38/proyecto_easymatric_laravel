<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    //
    public function index(){

        $institutions=Institution::all();

        return response()->json($institutions);


    }

    public function create(){
        return view('institutions.create');
    }
    public function salida(Request $request){
       //si se le pone el  return Institution::create($request->all()); muestra los datos escritos
        $institutions=Institution::create($request->all());
        return response()->json($institutions);

    }



    public function show ($id){

     $institutions=Institution::find($id);
     return response()->json($institutions);


    }

    
    public function edit(Institution $institutions)
    { //Encuentro el Curso

        return view('institutions.edit', compact('institutions'));
    }
    public function update(Request $request, Institution $institutions)
    {
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $institutions->update($request->all());

        return response()->json($institutions);
    }

     
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Institution $institutions)
    {
        $institutions->delete();
        return response()->json($institutions);
    }
}
