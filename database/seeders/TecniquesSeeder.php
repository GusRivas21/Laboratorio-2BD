<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Techniques;

class TecniquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $tecniques = [
                [
                    'name' => 'Electrochemical reduction',
                    'description' => 'A technique used to reduce the corrosion of metal objects, often used on sculptures or artifacts that have experienced damage due to rust or corrosion.'
                ],
                [
                    'name' => 'Lining',
                    'description' => 'A method used to reinforce paintings by attaching a new layer of canvas or fabric to the back of the original artwork to provide structural stability.'
                ],
                [
                    'name' => 'Inpainting',
                    'description' => 'A technique where missing or damaged sections of a painting are carefully recreated or filled in with matching colors and materials to restore the original appearance.'
                ],
                [
                    'name' => 'Solvent cleaning',
                    'description' => 'A cleaning method that uses solvents to remove dirt, grime, or unwanted materials from an artwork without damaging the original surface or underlying layers.'
                ],
                [
                    'name' => 'Mechanical cleaning',
                    'description' => 'A physical cleaning technique that uses specialized tools, such as brushes or abrasives, to remove dirt or contaminants from a surface without affecting the underlying material.'
                ],
                [
                    'name' => 'Structural repair',
                    'description' => 'Repairs the underlying framework or structure of an artwork, such as repairing cracks in sculptures or reinforcing the frame of a painting, to restore its integrity.'
                ]
            ];
            
    
            foreach ($tecniques as $tecnique) {
                Techniques::create($tecnique);
            }
        }
    }
}
