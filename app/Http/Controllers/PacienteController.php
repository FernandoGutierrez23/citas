<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteCreateRequest;
use App\Http\Requests\PacienteEditRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    //Se creará esta función para poder mandar llamar a los administradores desde la base de datos y listarlos en una interfaz
    public function index(){
        $pacientes = Paciente::paginate(5);
        return view('paciente.index', compact('pacientes'));
    }

    //Se creó estre controlador para poder agregar un nuevo paciente
    public function create(){
        return view('paciente.create');
    }

    //La siguiente función servirá para almacenar a los usuarios que sean creados
    public function store(PacienteCreateRequest $request){
        $paciente = Paciente::create($request->only('nombre', 'apellido_p', 'apellido_m', 'edad', 'email', 'direccion', 'telefono','descripcion'));

        return redirect()->route('paciente.show',$paciente->id)->with('success','Se agregó correctamente un nuevo paciente');
    }

    //Esta parte del código se agregó para mostra el perfil de una persona en particular mediante su id
    public function show($id){
        $paciente = Paciente::findOrfail($id);
        return view('paciente.show', compact('paciente'));
    }

    //La siguiente función permite redireccionar a la vista en donde se editaran los datos del paciente seleccionado
    public function edit(Paciente $paciente){
        return view('paciente.edit',compact('paciente'));
    }

    //La siguiente función permite actualizar los nuevos datos que se han modificado y almacenarlos en la bdd
    public function update(PacienteEditRequest $request, $id){
        $data = $request->only('nombre','apellido_p','apellido_m','edad','email','direccion','telefono','descripcion');

        $paciente = Paciente::findOrfail($id);

        $paciente->update($data);
        return redirect()->route('paciente.show',$paciente->id)->with('success','Los datod del paciente se han actualizado correctamente');
    }

    //La siguiente funcion se encargará de hacer el proceso de eliminar un paciente de la bdd
    public function destroy(Paciente $paciente){
        $paciente->delete();

        return back()->with('success','Paciente eliminado correctamente');
    }
}
