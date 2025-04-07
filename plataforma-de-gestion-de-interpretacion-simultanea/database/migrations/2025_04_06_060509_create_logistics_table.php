<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('logistics', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('interprete_id');
        $table->unsignedBigInteger('sede_id');
        $table->unsignedBigInteger('transporte_id');
        $table->timestamps();

        $table->foreign('interprete_id')->references('id')->on('interpreters')->onDelete('cascade');
        $table->foreign('sede_id')->references('id')->on('venues')->onDelete('cascade');
        $table->foreign('transporte_id')->references('id')->on('transports')->onDelete('cascade');
    });
}
    public function down(): void
    {
        Schema::dropIfExists('logistics');
    }
};
