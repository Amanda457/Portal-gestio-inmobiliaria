<?php

namespace Database\Factories;
use App\Models\Pis;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pis>
 */
class PisFactory extends Factory
{
    protected $model = Pis::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_referencia' => $this->faker->sentence(3),
            'tipus' => $this->faker->randomElement(['Pis', 'Casa']),
            'direccio' => $this->faker->address,
            'poblacio' => $this->faker->city,
            'm2' => $this->faker->numberBetween(30, 999),
            'habitacions' => $this->faker->numberBetween(1, 12),
            'lavabos' => $this->faker->numberBetween(1, 12),
            'preu' => $this->faker->numberBetween(300, 2000),
            'tipus_cuina' => $this->faker->randomElement(['Americana', 'Oberta (sense barra/illa)', 'Independent']),
            'estat' => $this->faker->randomElement(['Per reformar', 'Per entrar a viure', 'Nou']),
            'descripcio' => $this->faker->paragraph(3),
            'ascensor' => $this->faker->boolean,
        ];
    }
}
