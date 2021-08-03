<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellido_p' => $this->faker->lastName(),
            'apellido_m' =>$this->faker->lastName(),
            'edad' => $this->faker->areaCode(),
            'email' => $this->faker->safeEmail(),
            'direccion' =>$this->faker->address(),
            'telefono' => $this->faker->tollFreePhoneNumber(),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
