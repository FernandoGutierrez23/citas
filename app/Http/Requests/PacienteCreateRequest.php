<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:3|max:15',
            'apellido_p' => 'required',
            'apellido_m' => 'required',
            'edad' => 'required',
            'email' => 'required', 
            'direccion' => 'required', 
            'telefono' => 'required',
            'descripcion' => 'required'
        ];
    }

    //Con la siguiente función se pueden personalizar los mensajes que avisan que se ha cometido algún error
    public function messages()
    {
        return[
            'nombre.required' => 'El campo nombre debe ser llenado'
        ];
    }
}
