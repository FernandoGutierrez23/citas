<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Validamos que se ha iniciado sesión para visualizar el gestor de citas
Route::group(['middleware' => 'auth'], function(){

//----------------------ADMINISTRADORES O DOCTORES-----------------------------------------
//La siguiente ruta se creó para poder retornar la vista en donde se agregan nuevos usuarios
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('add-administradores');

//La siguiente ruta se creó para poder almacenar a los nuevos usuarios y regresa la vista users
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');

//La siguiente ruta permite mostrar la interfaz en donde se muestran los administradores del sistema
Route::get('/users',[App\Http\Controllers\UserController::class, 'index'])->name('users.index');

//La siguiente ruta permite mostrar la información de un usuario en particular
Route::get('/users/{user}',[App\Http\Controllers\UserController::class, 'show'])->name('users.show');

//La siguiente ruta envía a la interfaz en donde se muestran los datos del usuario seleccionado
Route::get('/users/{user}/edit',[App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');

//La siguiente ruta permite almacenar los datos modificados en la bdd
Route::put('/users/{user}',[App\Http\Controllers\UserController::class, 'update'])->name('users.update');

//La siguiente ruta se complemente con la función destroy para eliminar un registro de la bdd
Route::delete('/users/{user}',[App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');



//----------------------PACIENTES----------------------------------------------------------
//La siguiente ruta se creó para poder retornar la vista en donde se agregan nuevos pacientes
Route::get('/paciente/create', [App\Http\Controllers\PacienteController::class, 'create'])->name('vista-pacientes');

//La siguiente ruta se creó para poder almacenar a los nuevos pacientes
Route::post('/paciente', [App\Http\Controllers\PacienteController::class, 'store'])->name('paciente.store');

//La siguiente ruta permite mostrar la interfaz en donde se muestran los pacientes
Route::get('/paciente',[App\Http\Controllers\PacienteController::class, 'index'])->name('paciente.index');

//La siguiente ruta permite mostrar la información de un usuario en particular
Route::get('paciente/{paciente}',[App\Http\Controllers\PacienteController::class, 'show'])->name('paciente.show');

//La siguiente ruta permite almacenar los datos modificados en la bdd
Route::get('paciente/{paciente}/edit',[App\Http\Controllers\PacienteController::class, 'edit'])->name('paciente.edit');

//La siguiente ruta permite almacenar los datos modificados en la bdd
Route::put('/paciente/{paciente}',[App\Http\Controllers\PacienteController::class, 'update'])->name('paciente.update');

//La siguiente ruta se complemente con la función destroy para eliminar un registro de la bdd
Route::delete('/paciente/{paciente}',[App\Http\Controllers\PacienteController::class, 'destroy'])->name('paciente.delete');



//----------------------CITAS----------------------------------------------------------
Route::get('/cita/create', [App\Http\Controllers\CitaController::class, 'create'])->name('vista-citas');

//La siguiente ruta se creó para poder almacenar a los datos de las citas que se registren
Route::post('/cita', [App\Http\Controllers\CitaController::class, 'store'])->name('cita.store');

//La siguiente ruta se creó para poder mostrar los datos de las citas que se registren
Route::get('/cita', [App\Http\Controllers\CitaController::class, 'index'])->name('cita.index');

//La siguiente ruta permite mostrar la información de un usuario en particular
Route::get('/cita/{cita}',[App\Http\Controllers\CitaController::class, 'show'])->name('cita.show');

//La siguiente ruta permite almacenar los datos modificados en la bdd
Route::get('/cita/{cita}/edit',[App\Http\Controllers\CitaController::class, 'edit'])->name('cita.edit');

//La siguiente ruta permite almacenar los datos modificados en la bdd
Route::put('/cita/{cita}',[App\Http\Controllers\CitaController::class, 'update'])->name('cita.update');

//La siguiente ruta se complemente con la función destroy para eliminar un registro de la bdd
Route::delete('/cita/{cita}',[App\Http\Controllers\CitaController::class, 'destroy'])->name('cita.delete');

});