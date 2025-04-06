<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Owner;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArtPiece>
 */
class ArtPieceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2),
            'creationDate' => $this->faker->date('Y-m-d'),
            'dimensions' => $this->faker->randomElement([
                '60x80 cm', '120x150 cm', '40x40 cm', '100x200 cm'
            ]),
            'material' => $this->faker->randomElement([
                'Oil on canvas', 'Marble', 'Wood', 'Bronze', 'Tempera on panel'
            ]),
        ];
    }
}
