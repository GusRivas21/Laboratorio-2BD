<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venue;
use App\Models\Event;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $venue = Venue::create([
            'name' => $faker->company,
            'address' => $faker->address,
        ]);

        Event::create([
            'event_name' => $faker->sentence,
            'theme' => $faker->word,
            'date' => $faker->date,
            'capacity' => $faker->numberBetween(50, 500),
            'venue_id' => $venue->id,
        ]);
    }
}
