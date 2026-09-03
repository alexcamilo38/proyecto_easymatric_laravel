<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    //
    public function index(){

        $guardians=Guardian::all();

        return view('guardians.index',compact('guardians'));


    }

    public function create(){
        return view('guardians.create');
    }
    public function salida(Request $request){
       //si se le pone el  return Guardian::create($request->all()); muestra los datos escritos
        Guardian::create($request->all());
        return redirect()->route('guardians.index')->with('success', 'Registro exitoso');
    }



    public function show ($id){

     $guardians=Guardian::find($id);
       return view('guardians.show',compact('guardians'));


    }

    
    public function edit(Guardian $guardians){ 

        return view('guardians.edit', compact('guardians'));
    }
    public function update(Request $request, Guardian $guardians){
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $guardians->update($request->all());

        return redirect()->route('guardians.index');
    }

     
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Guardian $guardians) {
        $guardians->delete();
        return redirect()->route('guardians.index');
    }
}
