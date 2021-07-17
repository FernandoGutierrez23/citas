<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Este modelo fue creado para administrar la tabla de pacientes mediante el comando php artisan make:model Paciente
class Paciente extends Model
{
    use HasFactory;

    //Con esta instrucción indicamos que se guarden todos los datos que contiene el formulario
    protected $guarded = [];
}
