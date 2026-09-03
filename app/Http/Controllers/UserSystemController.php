<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\UserSystem;
use Illuminate\Http\Request;

class UserSystemController extends Controller
{
    //
    public function index(){

        $userSystems=UserSystem::all();

        return view('user_systems.index',compact('userSystems'));


    }

    public function create(){
        //llamamos a todos sin necesidad de escribir uno por uno
        $rols=Rol::all(); 
        return view('user_systems.create',compact('rols'));
    }

    public function salida(Request $request){
        UserSystem::create($request->all());
        return redirect()->route('user_systems.index')->with('success', 'Usuario registrado exitosamente');
    }

    public function show ($id){

        $userSystem=UserSystem::find($id);
        return view('user_systems.show',compact('userSystem'));


    }

    public function edit(UserSystem $userSystem)
    {
        // Traemos todos los registros de las tablas foráneas
        $rols = Rol::all(); 

        // Enviamos todo a la vista con compact
        return view('user_systems.edit', compact('userSystem', 'rols'));
    }

    public function update(Request $request, UserSystem $userSystem)
    {
        //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $userSystem->update($request->all());

        return redirect()->route('user_systems.index');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(UserSystem $userSystem)
    {
        $userSystem->delete();
        return redirect()->route('user_systems.index');
    }
}
