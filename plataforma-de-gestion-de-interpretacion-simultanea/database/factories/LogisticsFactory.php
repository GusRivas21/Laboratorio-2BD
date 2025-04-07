<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LogisticsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'interpreter_id' => Interpreter::inRandomOrder()->first()->id,
            'venue_id' => Venue::inRandomOrder()->first()->id,
            'transport_id' => Transport::inRandomOrder()->first()->id,
        ];
    }
}
