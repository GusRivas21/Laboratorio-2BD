<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Adress;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responsible>
 */
class ResponsibleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'phoneNumber' => $this->faker->numerify('##########'),
            'certification' => $this->faker->randomElement([
                'Conservador Certificado por AIC',
                'Especialista en Restauración de Pinturas',
                'Restaurador de Esculturas',
                'Certificación en Conservación Preventiva',
                'Restauración de Arte Digital',
                'Máster en Restauración de Arte',
                'Certificación en Diagnóstico de Materiales',
            ]),
            'adress_id' => Adress::factory(),
        ];
    }
}
