<?php

namespace Database\Factories;

use App\Models\Interpreter;
use Illuminate\Database\Eloquent\Factories\Factory;

class InterpreterFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'experience' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
        ];
    }
}
