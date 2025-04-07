<?php

namespace Database\Factories;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

class LanguageFactory extends Factory
{
    protected $model = Language::class;

    public function definition(): array
    {
        return [
            'name' => ucfirst($this->faker->randomElement([
                'Español',
                'Inglés',
                'Francés',
                'Alemán',
                'Italiano',
                'Portugués',
            ])),
        ];
    }
}

