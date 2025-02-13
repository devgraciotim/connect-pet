<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pet;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adoption>
 */
class AdoptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet_id' => Pet::inRandomOrder()->value('id'),
            'adopter_id' => User::inRandomOrder()->value('id'),
            'status' => $this->faker->randomElement(['Concluido', 'Cancelado', 'Em Processo'])
        ];
    }
}
