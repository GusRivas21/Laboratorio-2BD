<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $materials = [
                [
                    'name' => 'Acrylic resin',
                    'description' => 'A synthetic resin commonly used as a binder in paints and coatings.'
                ],
                [
                    'name' => 'Acetone',
                    'description' => 'A solvent commonly used for cleaning and removing paints and varnishes.'
                ],
                [
                    'name' => 'Cotton swabs',
                    'description' => 'Small sticks with cotton at both ends, used for cleaning and applying solutions.'
                ],
                [
                    'name' => 'Calcium hydroxide',
                    'description' => 'A compound used in conservation to neutralize acids and promote deacidification.'
                ],
                [
                    'name' => 'Xylene',
                    'description' => 'An aromatic hydrocarbon solvent used for cleaning and thinning paints and varnishes.'
                ],
                [
                    'name' => 'Calcium carbonate',
                    'description' => 'A naturally occurring compound used in conservation as a filler or for surface treatment.'
                ]
            ];
    
            foreach ($materials as $material) {
                Material::create($material);
            }
        }
    }
}
