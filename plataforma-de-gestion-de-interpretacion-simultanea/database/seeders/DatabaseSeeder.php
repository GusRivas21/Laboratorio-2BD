<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Language;
use App\Models\Interpreter;
use App\Models\Event;
use App\Models\Customer;
use App\Models\Evaluation;
use App\Models\Venue;
use App\Models\Transport;
use App\Models\Logistics;
use App\Models\Equipment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(LevelSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(InterpreterSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(EvaluationSeeder::class);
        $this->call(TransportSeeder::class);
        $this->call(LogisticsSeeder::class);
        $this->call(EquipmentSeeder::class);

        $levels = Level::all();
        $languages = Language::all();
        $interpreters = Interpreter::all();

        foreach ($interpreters as $interpreter) {
            $spoken = $languages->random(rand(2, 5));
            foreach ($spoken as $language) {
                $interpreter->languages()->attach($language->id, [
                    'level_id' => $levels->random()->id,
                ]);
            }
        }
    }
}

