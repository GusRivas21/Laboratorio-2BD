<?php

use App\Models\Restoration;
use App\Models\Techniques;
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
        Schema::create('technique_restoration', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Techniques::class)->constrained();
            $table->foreignIdFor(Restoration::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technique_restoration');
    }
};
