<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Supplier;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Batches>
 */
class BatchesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'acquisitionDate' => $this->faker->date(),
            'quantity' => $this->faker->randomElement([50, 100, 150, 200]),
            'supplier_id' => Supplier::inRandomOrder()->first()->id,
            'material_id' => rand(1, 6)
        ];
    }
}
