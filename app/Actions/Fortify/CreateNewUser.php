<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *  AQUÍ SE AGREGÓ EL CAPTCHA
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [

            //Creamos las reglas para crear el campo de 'nombre de usuario'
            'name'=>[
                'required',
                'string',
                'max:255'
            ],

            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique(User::class),
            ],
           
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'g-recaptcha-response' => ['required', 'captcha'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'username' => $input['username'], //<---Lo creamos para poder devolver el nombre de usuario
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
