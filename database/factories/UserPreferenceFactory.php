<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserPreference>
 */
class UserPreferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->value('id'),
            'size' => $this->faker->randomElement(['Grande', 'Médio', 'Pequeno']),
            'min_age' => $min = $this->faker->numberBetween(1, 98),
            'max_age' => $this->faker->numberBetween($min + 1, 99),
        ];
    }
}
