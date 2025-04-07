<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assignment;
use App\Models\Interpreter;
use App\Models\Event;

class AssignmentSeeder extends Seeder
{
    public function run(): void
    {
        $interpreter = Interpreter::factory()->create();
        $event = Event::factory()->create();

        Assignment::create([
            'interpreter_id' => $interpreter->id,
            'event_id' => $event->id,
        ]);
    }
}
