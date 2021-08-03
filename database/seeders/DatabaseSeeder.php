<?php

namespace Database\Seeders;

use App\Models\Cita;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Paciente::factory(20)->create();
        Cita::factory(20)->create();
    }
}
