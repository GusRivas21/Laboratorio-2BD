<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transport;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transport::create([
            'name' => 'Bus 1',
            'capacity' => 50,
            'slots' => 30,
        ]);

        Transport::create([
            'name' => 'Van 1',
            'capacity' => 10,
            'slots' => 6,
        ]);

        Transport::create([
            'name' => 'Van 2',
            'capacity' => 12,
            'slots' => 8,
        ]);
    }
}
