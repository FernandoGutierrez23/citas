<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Se creó estre controlador para poder crear un nuevo usuario, en este caso agregar un paciente
    public function create(){
        return view('users.create');
    }

    //La siguiente función servirá para almacenar a los usuarios que sean creadis
    public function store(Request $request){
        User::create($request->only('name','username','email')
    + [
        'password' => bcrypt($request->input('password')),
        //Esto se hace para pasar la contraseña a la BDD encriptada
    ]);

        return redirect()->back();
    }
}
