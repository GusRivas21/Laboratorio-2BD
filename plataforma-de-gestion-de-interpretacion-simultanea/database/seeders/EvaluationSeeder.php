<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationSeeder extends Seeder
{
    public function run()
    {
        DB::table('evaluations')->insert([
            ['id' => 1, 'score' => 5, 'comments' => 'Excellent', 'interpreter_id' => 1],
        ]);

        DB::table('evaluators')->insert([
            ['evaluation_id' => 1, 'other_field' => 'value'],
        ]);
    }
}

