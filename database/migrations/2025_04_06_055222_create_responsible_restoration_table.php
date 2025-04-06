<?php

use App\Models\Responsible;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Restoration;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('responsible_restoration', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Responsible::class)->constrained();
            $table->foreignIdFor(Restoration::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsible_restoration');
    }
};
