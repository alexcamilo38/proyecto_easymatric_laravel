<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //
    public function index(){

        $rols=Rol::all();

        return response()->json($rols);

    }

    public function create(){
        return view('rols.create');
    }

    public function salida(Request $request){
       //si se le pone el  return Rol::create($request->all()); muestra los datos escritos
        $rols = Rol::create($request->all());
        return response()->json($rols);


    }

    public function show ($id){

       $rols=Rol::find($id);
       return response()->json($rols);

    }

    
    public function edit(Rol $rols)
    { //Encuentro el Curso

        return response()->json($rols);
    }

    public function update(Request $request, Rol $rols)
    {
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $rols->update($request->all());

        return response()->json($rols);
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Rol $rols)
    {
        $rols->delete();
        return response()->json($rols);
    }
}
