<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $data_reserva = $this->faker->dateTimeBetween('-1 month', '+1 month');
        $estat = $this->faker->randomElement(['Per revisar', 'Aprovada', 'Rebutjada']);
        $data_fi_gestio = null;
        if (in_array($estat, ['Aprovada', 'Rebutjada'])) {
            $data_fi_gestio = now();
        }
        return [
            'client_id' => function () {
                return \App\Models\Client::factory()->create()->id;
            },
            'pis_id' => function () {
                return \App\Models\Pis::factory()->create()->id;
            },
            'data_reserva' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'estat' => $this->faker->randomElement(['Per revisar', 'Aprovada', 'Rebutjada']),
            'data_fi_gestio' =>  $data_fi_gestio,
        ];
    }
}
