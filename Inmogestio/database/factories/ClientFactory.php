<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->firstName,
            'cognom' => $this->faker->lastName,
            'telefon' => $this->faker->numberBetween(100000000, 999999999), // Números de teléfono de 9 dígitos
            'data_naixement' => $this->faker->dateTimeBetween('-70 years', '-18 years'),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
