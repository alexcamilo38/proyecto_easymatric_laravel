<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    //
    public function index(){

        $guardians=Guardian::all();

       return response()->json($guardians);


    }

    public function create(){
        return view('guardians.create');
    }
    public function salida(Request $request){
       //si se le pone el  return Guardian::create($request->all()); muestra los datos escritos
        $guardians=Guardian::create($request->all());
        return response()->json($guardians);
    }



    public function show ($id){

     $guardians=Guardian::find($id);
     return response()->json($guardians);


    }

    
    public function edit(Guardian $guardians){ 

        return view('guardians.edit', compact('guardians'));
    }
    public function update(Request $request, Guardian $guardians){
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $guardians->update($request->all());

         return response()->json($guardians);
    }

     
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Guardian $guardians) {
        $guardians->delete();
         return response()->json($guardians);
    }
}
