<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'name' => 'required',
            //Al utilizar las validaciones con el FindOrFail se utilizará la siguiente lógica de validación solo para los campos con característica 'unique'
            'username' => 'unique:users,username,' .$this->user.'|required',
            'email' => 'unique:users,email,' .$this->user.'|required',
            'password' => 'sometimes'

            //-----ESTA VALIDACIÓN SE UTILIZA CUANDO SE USA UN MODELO LLAMADO FIND MODEL BAININ------------------------------------------------------

            //$user = $this->route('user');

            //Método 1 para poder sobreescribir los cambios 
            //'username' => ['required','min:4', 'unique:users,username,' . request()->route('user')->id],
            //Método 2 para poder sobreescribir los datos en la interfaz de edición 
            //'email' => ['required', 'unique:users,email,' . request()->route('user')->id], 
        ];
    }
}
