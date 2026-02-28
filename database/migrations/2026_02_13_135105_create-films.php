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
     Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('pays');
            $table->integer('annee')-> unsigned()->default(date('Y'));
            $table->time('duree'); // durée en minutes (TIME)
            $table->string('genre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('films');
    }
};
