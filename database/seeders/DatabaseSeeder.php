<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ArtPiece;
use App\Models\Adress;
use App\Models\Owner;
use App\Models\Intervention;
use App\Models\Restoration;
use App\Models\Revision;
use App\Models\Analysis;
use App\Models\Batches;
use App\Models\Responsible;
use App\Models\Supplier;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            MaterialSeeder::class
        ]);
        $this->call([
            TecniquesSeeder::class
        ]);



        ArtPiece::factory(50)->create();
        Intervention::factory(50)->create();
        Restoration::factory(50)->create();
        Revision::factory(50)->create();
        Analysis::factory(50)->create();
        Adress::factory(150)->create();
        Owner::factory(50)->create();
        Supplier::factory(50)->create();
        Responsible::factory(50)->create();
        Batches::factory(50)->create();

        $this->call([
            ArtPieceOwnerSeeder::class
        ]);
        
        $this->call([
            ResponsibleRestorationSeeder::class
        ]);

        $this->call([
            TechniqueRestorationSeeder::class
        ]);

        $this->call([
            TechniqueMaterialSeeder::class
        ]);
    }

}
