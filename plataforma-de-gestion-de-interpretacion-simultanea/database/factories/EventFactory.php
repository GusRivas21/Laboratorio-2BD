<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{

    public function definition(): array
    {
        return [
            'event_name' => $this->faker->randomElement([
                'International Language Symposium',
                'Medical Interpreters Conference',
                'Tech Translation Summit',
                'Legal Interpreting Workshop',
                'Cultural Exchange Forum'
            ]),
            'date' => $this->faker->date,
            'theme' => $this->faker->randomElement(['Science', 'Technology', 'Business']),
            'capacity' => $this->faker->numberBetween(10, 50),
            'venue_id' => Venue::factory(),
        ];
    }
}
