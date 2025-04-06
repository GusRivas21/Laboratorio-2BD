<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Adress;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name' => $this->faker->firstName,
        'lastName' => $this->faker->lastName,
        'phoneNumber' => $this->faker->numerify('##########'),
        'adress_id' => Adress::inRandomOrder()->first()->id 
        ];
    }
}
