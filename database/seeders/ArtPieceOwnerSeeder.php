<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ArtPiece;
use App\Models\Owner;

class ArtPieceOwnerSeeder extends Seeder
    {
public function run()

    {
        $artPieces = ArtPiece::all();
        $owners = Owner::all()->pluck('id');

        foreach ($artPieces as $artPiece) {
        
            $randomOwners = $owners->random(rand(1, 4));
            $artPiece->owners()->syncWithoutDetaching($randomOwners);
        }
    }
}