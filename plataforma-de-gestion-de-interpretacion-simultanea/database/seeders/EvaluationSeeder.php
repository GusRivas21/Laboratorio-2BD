<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evaluation;
use App\Models\Customer;
use App\Models\Interpreter;
use App\Models\Event;

class EvaluationSeeder extends Seeder
{
    public function run(): void
    {
        Evaluation::factory(10)->create();
    }
}
