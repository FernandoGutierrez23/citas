<?php

namespace App\Http\Controllers;

use App\Http\Requests\CitaCreateRequest;
use App\Http\Requests\CitaEditRequest;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    //Se creará esta función para poder mostrar las citas desde la base de datos y listarlos en una interfaz
    public function index(){
        $citas = Cita::paginate(5);
        return view('cita.index', compact('citas'));
    }
    
    //Se creó estre controlador para poder agregar una nueva CITA
    public function create(){
        return view('cita.create');
    }

    //La siguiente función servirá para almacenar a los usuarios que sean creados
    public function store(CitaCreateRequest $request){
        $cita = Cita::create($request->only('nombre', 'apellido_p', 'apellido_m', 'edad', 'email', 'direccion', 'telefono','date_cita','hora','motivo'));

        return redirect()->route('cita.show',$cita->id)->with('success','Se ha agendado correctamente la cita');
    }

    //Esta parte del código se agregó para mostra la información de una cita agendada en particular mediante su id
    public function show($id){
        $cita = Cita::findOrfail($id);
        return view('cita.show', compact('cita'));
    }

    //La siguiente función permite redireccionar a la vista en donde se editaran los datos del paciente seleccionado
    public function edit(Cita $cita){
        return view('cita.edit',compact('cita'));
    }

    //La siguiente función permite actualizar los nuevos datos que se han modificado y almacenarlos en la bdd
    public function update(CitaEditRequest $request, $id){
        $data = $request->only('nombre', 'apellido_p', 'apellido_m', 'edad', 'email', 'direccion', 'telefono','date_cita','hora','motivo');

        $cita = Cita::findOrfail($id);

        $cita->update($data);
        return redirect()->route('cita.show',$cita->id)->with('success','Los datos de la cita se han actualizado correctamente');
    }

    //La siguiente funcion se encargará de hacer el proceso de eliminar un paciente de la bdd
    public function destroy(Cita $cita){
        $cita->delete();

        return back()->with('success','La cita se ha eliminado correctamente');
    }
}
