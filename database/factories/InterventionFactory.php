<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ArtPiece;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Intervention>
 */
class InterventionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'filePath' => 'files/' . $this->faker->uuid(),
            'notes' => $this->faker->sentence(10),
            'art_piece_id' => ArtPiece::inRandomOrder()->first()->id        
        ];
    }
}
