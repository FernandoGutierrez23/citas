<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    //Se creó estre controlador para poder agregar un nuevo paciente
    public function create(){
        return view('paciente.create');
    }

    //La siguiente función servirá para almacenar a los usuarios que sean creados
    public function store(Request $request){
        Paciente::create($request->only('nombre', 'apellido_p', 'apellido_m', 'edad', 'email', 'direccion', 'telefono','descripcion'));

        return redirect()->back();
    }
}
