<?php

namespace Database\Factories;

use App\Models\Assignment;
use App\Models\Interpreter;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssignmentFactory extends Factory
{
    protected $model = Assignment::class;

    public function definition()
    {
        return [
            'interpreter_id' => Interpreter::factory(),
            'event_id' => Event::factory(),
        ];
    }
}
