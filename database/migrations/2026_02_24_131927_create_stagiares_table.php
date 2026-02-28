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
        Schema::create('stagiares', function (Blueprint $table) {
            $table->id();
            $table->string('completedname');
            $table->string('genre') -> enum('M','F');
            $table->date('dateNaisaance');
            $table->integer('note');
            $table->string('groupe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiares');
    }
};
