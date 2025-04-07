<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('interpreter_speaks_language', function (Blueprint $table) {
            $table->foreignId('interpreter_id')->constrained()->onDelete('cascade');
            $table->foreignId('language_id')->constrained()->onDelete('cascade');
            $table->foreignId('level_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->primary(['interpreter_id', 'language_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('interpreter_speaks_language');
    }
};
