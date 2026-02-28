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
      Schema::create('participations', function (Blueprint $table) {
    $table->id();
    $table->foreignId('films_id')->constrained('films')->cascadeonDelete;
    $table->foreignId('acteur_id')->constrained('acteurs')->cascadeonDelete;

    $table->string('role');
    $table->timestamps();

    $table->unique(['films_id', 'acteur_id']);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('participations');
    }
};