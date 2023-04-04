<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $empresas = Empresa::all("id");
        $empresas = $empresas->toArray();
        $empresa_id = Arr::random($empresas)["id"];
        return [
            'nombre' => fake()->name(),
            'telefono' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'empresa_id' => $empresa_id

        ];
    }
}
