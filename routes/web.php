<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//----------------------ADMINISTRADORES O DOCTORES-----------------------------------------
//La siguiente ruta se creó para poder retornar la vista en donde se agregan nuevos usuarios
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('vista-administradores');

//La siguiente ruta se creó para poder almacenar a los nuevos usuarios y regresa la vista users
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');

//----------------------PACIENTES------------------------------------------------------------------
//La siguiente ruta se creó para poder retornar la vista en donde se agregan nuevos pacientes
Route::get('/paciente/create', [App\Http\Controllers\PacienteController::class, 'create'])->name('vista-pacientes');

//La siguiente ruta se creó para poder almacenar a los nuevos pacientes
Route::post('/paciente', [App\Http\Controllers\PacienteController::class, 'store'])->name('paciente.store');

