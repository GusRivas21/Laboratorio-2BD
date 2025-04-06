<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Restoration;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Analysis>
 */
class AnalysisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'type' => $this->faker->randomElement([
                    'Rayos X',
                    'Espectrometría',
                    'Microscopía electrónica',
                    'Análisis pigmentario',
                    'Reflectografía infrarroja'
                ]),
                'date' => $this->faker->date(),
                'notes' => $this->faker->text(100),
                'restoration_id' => Restoration::inRandomOrder()->first()->id 
            ];
    }
}
