<?php

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
        Schema::create('interpreter_assigned_event', function (Blueprint $table) {
            $table->unsignedBigInteger('interpreter_id');
            $table->unsignedBigInteger('event_id');

            $table->foreign('interpreter_id')->references('id')->on('interpreters')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');

            $table->primary(['interpreter_id', 'event_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interpreter_assigned_event');
    }
};
