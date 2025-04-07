<?php

namespace Database\Factories;

use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venue>
 */
class VenueFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Aula 101',
                'Sala B2',
                'Auditorio Central',
                'Módulo 3',
                'Pabellón Norte'
            ]),
            'address' => $this->faker->address(),
        ];
    }
}
