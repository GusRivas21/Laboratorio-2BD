<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogisticsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('logistics')->insert([
            'interprete_id' => 1,
            'sede_id' => 1,
            'transporte_id' => 1,
        ]);
    }
}
