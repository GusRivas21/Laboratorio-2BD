<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Material;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->date('acquisitionDate');
            $table->string('quantity',45);
            $table->foreignId('supplier_id')
            ->constrained()
            ->onDelete('cascade');
            // $table->foreignId('material_id')
            // ->constrained()
            // ->onDelete('cascade');
            $table->foreignIdFor(Material::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
