<?php

namespace Database\Factories;

use App\Models\Cita;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cita::class;

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
            'date_cita' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'hora'=> $this->faker->time($format = 'H:i:s', $max = 'now'),
            'motivo' => $this->faker->text(),
        ];
    }
}
