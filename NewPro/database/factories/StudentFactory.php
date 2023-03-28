<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Matricula' => $this->faker->unique()->numberBetween(0, 10),
            'CorrInst' => $this->faker->unique()->name(),
            'CorrPerr' => $this->faker->unique()->name(),
            'NameA' => fake()->name(),
            'LastName' =>fake()->name(),
            'Class' => $this->faker->randomElement(['XD', 'Ingles', 'Calculo', 'Virtualizacion', 'Diseño']),
            'Classroom' => $this->faker->randomElement(['XD', 'Ingles', 'Calculo', 'Virtualizacion', 'Diseño']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
