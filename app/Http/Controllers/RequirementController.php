<?php

namespace App\Http\Controllers;

use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    //
    public function index(){

        $requirements=Requirement::all();

        return view('requirements.index',compact('requirements'));


    }

    public function create(){
        return view('requirements.create');
    }
    public function salida(Request $request){
       //si se le pone el  return Requirement::create($request->all()); muestra los datos escritos
        return Requirement::create($request->all());

    }



    public function show ($id){

     $requirements=Requirement::find($id);
       return view('requirements.show',compact('requirements'));


    }

    
    public function edit(Requirement $requirements){ 

        return view('requirements.edit', compact('requirements'));
    }
    public function update(Request $request, Requirement $requirements){
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $requirements->update($request->all());

        return redirect()->route('requirements.index');
    }

     
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Requirement $requirements) {
        $requirements->delete();
        return redirect()->route('requirements.index');
    }
}
