<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MahasiswaFactory>
 */
class MahasiswaFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->numberBetween(19, 23) . '05551' . $this->faker->randomNumber(3, true),
            'name' => fake()->name(),
            'angkatan' => '20' . fake()->numberBetween(19, 23),
            'jk' => fake()->numberBetween(1, 2) == 1 ? 'Laki-laki' : 'Perempuan',
            'telepon' => fake()->phoneNumber(),
            'agama' => fake()->numberBetween(1, 2) == 1 ? 'Katolik' : 'Hindu',
            'alamat' => fake()->address()
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
