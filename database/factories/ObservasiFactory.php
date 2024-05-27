<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Observasi>
 */
class ObservasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'date' => $this->faker->date($format = 'd F Y', $max = 'now'),
            'status' => $this->faker->randomElement(['Yes', 'No']),
            'final' => $this->faker->randomElement(['Yes', 'No', 'Not Yet']),
        ];
    }
}
