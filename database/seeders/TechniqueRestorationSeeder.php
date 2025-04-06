<?php

namespace Database\Seeders;

use App\Models\Restoration;
use App\Models\Techniques;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechniqueRestorationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restorations = Restoration::all();
        $technique = Techniques::all()->pluck('id');

        foreach ($restorations as $restoration) {
        
            $randomTechnique = $technique->random(rand(1, 4));
            $restoration->technique()->syncWithoutDetaching($randomTechnique);
        }
    }
}
