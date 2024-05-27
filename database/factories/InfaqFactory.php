<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Infaq>
 */
class InfaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'date' => fake()->dateTimeThisYear(), // Gunakan metode yang sesuai untuk tanggal
            'image' => fake()->imageUrl(), // URL gambar acak
            'status' => fake()->randomElement(['Yes', 'No']),
        ];
    }
}
