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
       Schema::create('plans', function (Blueprint $table) {
            $table->uuid('id_plan')->primary();
          
            $table->decimal('montant', 10, 2);
            $table->integer('duree');
            $table->string('unite_duree', 10); // 'mois'
            $table->timestamps();

            $table->foreignUuid('mission_id')->references('id_mission')->on('missions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
