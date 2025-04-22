<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\Techniques;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechniqueMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materials = Material::all();
        $technique = Techniques::all()->pluck('id');

        foreach ($materials as $material) {
        
            $randomTechnique = $technique->random(rand(1, 4));
            $material->technique()->syncWithoutDetaching($randomTechnique);
        }
    }
}
