<?php

use App\Models\ArtPiece;
use App\Models\Owner;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('art_pieces_owners', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ArtPiece::class)->constrained();
            $table->foreignIdFor(Owner::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art_pieces_owners');
    }
};
