<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Language;
use App\Models\Interpreter;
use App\Models\Event;
use App\Models\Customer;
use App\Models\Evaluation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Llamamos a los seeders de Level, Language, Interpreter, Event, Customer, y Evaluation
        $this->call(LevelSeeder::class);  // Crea los niveles
        $this->call(LanguageSeeder::class); // Crea los idiomas
        $this->call(InterpreterSeeder::class); // Crea los intérpretes
        $this->call(EventSeeder::class); // Crea los eventos
        $this->call(CustomerSeeder::class); // Crea los clientes
        $this->call(EvaluationSeeder::class); // Crea las evaluaciones

        // Lógica para asignar idiomas a los intérpretes, si no se hace en el seeder
        $levels = Level::all();
        $languages = Language::all();
        $interpreters = Interpreter::all();

        foreach ($interpreters as $interpreter) {
            $spoken = $languages->random(rand(2, 5));  // Se asignan entre 2 a 5 idiomas por intérprete
            foreach ($spoken as $language) {
                $interpreter->languages()->attach($language->id, [
                    'level_id' => $levels->random()->id, // Asignamos un nivel aleatorio
                ]);
            }
        }
    }
}

