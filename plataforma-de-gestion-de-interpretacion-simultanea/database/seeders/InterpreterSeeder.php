<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interpreter;

class InterpreterSeeder extends Seeder
{
    public function run(): void
    {
        Interpreter::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'experience' => 'Advanced',
        ]);
    }
}
