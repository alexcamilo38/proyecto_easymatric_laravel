<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //
    public function index(){

        $rols=Rol::all();

        return view('rols.index',compact('rols'));

    }

    public function create(){
        return view('rols.create');
    }

    public function salida(Request $request){
       //si se le pone el  return Rol::create($request->all()); muestra los datos escritos
       return  Rol::create($request->all());

    }

    public function show ($id){

       $rols=Rol::find($id);
       return view('rols.show',compact('rols'));

    }

    
    public function edit(Rol $rols)
    { //Encuentro el Curso

        return view('rols.edit', compact('rols'));
    }

    public function update(Request $request, Rol $rols)
    {
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $rols->update($request->all());

        return redirect()->route('rols.index');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Rol $rols)
    {
        $rols->delete();
        return redirect()->route('rols.index');
    }
}
