<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ArtPiece;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restoration>
 */
class RestorationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('-1 year', 'now');
        $endDate = (clone $startDate)->modify('+'.rand(1, 10).' days');

        return [
            'startDate' => $startDate->format('Y-m-d'),
            'endDate' => $endDate->format('Y-m-d'),
            'reason' => $this->faker->text(100),
            'notes' => $this->faker->text(100),
            'art_piece_id' => ArtPiece::inRandomOrder()->first()->id   
        ];
    }
}
