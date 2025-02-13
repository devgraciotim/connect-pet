<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Type;
use App\Models\Location;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->randomNumber(2, true),
            'size' => $this->faker->randomElement(['Grande', 'Médio', 'Pequeno']),
            'breed' => $this->faker->word(),
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'weight' => $this->faker->randomFloat(2, 1, 30),
            'vaccinated' => $this->faker->boolean(80),
            'castred' => $this->faker->boolean(30),
            'adopted' => $this->faker->boolean(20),
            'created_by' => User::inRandomOrder()->value('id'),
            'type_id' => Type::inRandomOrder()->value('id'),
            'location_id' => Location::inRandomOrder()->value('id')
        ];
    }
}
