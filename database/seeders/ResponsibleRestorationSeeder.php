<?php

namespace Database\Seeders;

use App\Models\Responsible;
use App\Models\Restoration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResponsibleRestorationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restorations = Restoration::all();
        $responsibles = Responsible::all()->pluck('id');

        foreach ($restorations as $restoration) {
        
            $randomResponsibles = $responsibles->random(rand(1, 4));
            $restoration->responsibles()->syncWithoutDetaching($randomResponsibles);
        }
    }
}
