<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Se creará esta función para poder mandar llamar a los administradores desde la base de datos y listarlos en una interfaz
    public function index(){
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }
    
    //Se creó estre controlador para poder crear un nuevo usuario, en este caso agregar un paciente
    public function create(){
        return view('users.create');
    }

    //La siguiente función servirá para almacenar a los usuarios que sean creados
    public function store(UserCreateRequest $request){

        //Enseguida se muestran los requerimientos que exigue el formulario para almacenar los datos
        //$request->validate([
        //    'name' => 'required|min:3|max:30',
        //    'username' => 'required|unique:users',
        //    'email' => 'required|email|unique:users',
        //    'password' => 'required'
        //]);
        //La opción anterior se descartó creando un Request que proporcionara las instrucciones encargadas de hacer las validaciones

        $user = User::create($request->only('name','username','email')
    + [
        'password' => bcrypt($request->input('password')),
        //Esto se hace para pasar la contraseña a la BDD encriptada
    ]);

        return redirect()->route('users.show',$user->id)->with('success','Se agregó correctamente un nuevo administrador');
    }

    //Esta parte del código se agregó para mostra el perfil de una persona en particular mediante su id
    public function show($id){
        $user = User::findOrfail($id);

        //La siguiente instrucción también permite obtener los datos de un usuario por su id
        //public function show(User $user){ return view('users.show',compact('user'))}

        return view('users.show', compact('user'));
    }

    //La siguiente función permite redireccionar a la vista en donde se editaran los datos del administrador seleccionado
    public function edit(User $user){
        return view('users.edit',compact('user'));
    }

    //La siguiente función permite actualizar los nuevos datos que se han modificado y almacenarlos en la bdd
    public function update(UserEditRequest $request, $id){
        $data = $request->only('name','username'.'email');

        $user = User::findOrfail($id);

        //Si la contraseña se queda en blanco (no se modifica) no será actualizada
        if(trim($request->password)==''){
            $data = $request->except('password');
        }
        //De lo contrario, si el usuario introduce datos en la contraseña esta será actualizada
        else{
            $data = $request->all();
            $data['password']=bcrypt($request->password);
        }

        $user->update($data);
        return redirect()->route('users.show',$user->id)->with('success','Administrador actualizado correctamente');
    }

    //La siguiente funcion se encargará de hacer el proceso de eliminar un administrador de la bdd
    public function destroy(User $user){
        $user->delete();

        return back()->with('success','Administrador eliminado correctamente');
    }
}
