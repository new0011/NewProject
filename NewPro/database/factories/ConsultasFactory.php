<?php

namespace Database\Factories;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consultas>
 */
class ConsultasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Student = Student::all()->random();
        return [
            'Calificacion' => $this->faker->randomFloat(2, 0, 10),
            'Materia' => $this->faker->randomElement(['XD', 'Ingles', 'Calculo', 'Virtualizacion', 'Diseño']),
            'Horario'=> $this->faker->time('H:i:s', '7:00:00', '20:40:00'),
            'PromGeneral'=>$this->faker->randomFloat(2, 0, 10),
            'IDS'=> $Student->IDS,
        ];
    }
}
