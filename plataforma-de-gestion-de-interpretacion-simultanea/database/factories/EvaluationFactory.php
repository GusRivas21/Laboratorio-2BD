<?php

namespace Database\Factories;

use App\Models\Evaluation;
use App\Models\Interpreter;
use App\Models\Customer;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluationFactory extends Factory
{
    protected $model = Evaluation::class;

    public function definition(): array
    {
        return [
            'score' => $this->faker->numberBetween(1, 5),
            'comments' => $this->faker->sentence(),
            'interpreter_id' => Interpreter::factory(),
            'event_id' => Event::factory(),
            'client_id' => Customer::factory(),
        ];
    }
}
