<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Daftar>
 */
class DaftarFactory extends Factory
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
            'parents' => $this->faker->name,
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'lahir' => $this->faker->city . ', ' . $this->faker->date($format = 'd F Y', $max = 'now'),
            'jenjang' => $this->faker->randomElement(['TC', 'KB', 'TK', 'SD']),
            'alamat' => $this->faker->address,
            'telepon' => $this->faker->phoneNumber,
            'berkas' => $this->faker->word . '.pdf',
        ];
    }
}
