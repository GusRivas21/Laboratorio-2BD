<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Adress;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adress>
 */
class AdressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'homeNumber' => $this->faker->buildingNumber(),
        'street'       => $this->faker->streetName(),
        'neighborhood' => $this->faker->word(),
        'city'         => $this->faker->city(),
        'region'       => $this->faker->state(),
        'country'      => $this->faker->country(),
        ];
    }
}
