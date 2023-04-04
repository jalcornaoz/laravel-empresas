<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Idioma;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::factory()->count(20)->create()->each(function ($alumno) {
            $idiomas = ["Inglés", "Francés", "Alemán", "Italiano", "Chino", "Español", "Portugues"];
            $num_idiomas = rand(1, 3);
            $idiomas_hablados = Arr::random($idiomas, $num_idiomas);

            foreach ($idiomas_hablados as $idioma_tupla) {
                $idioma = new Idioma();
                $idioma->alumno_id = $alumno->id;
                $idioma->idioma = $idioma_tupla;
                $idioma->save();
            }
        });
    }
}
