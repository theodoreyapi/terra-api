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
       Schema::create('formulaires', function (Blueprint $table) {
            $table->uuid('id_formulaire')->primary();
           
            $table->string('nom', 255);
            $table->integer('ordre')->default(0);
            $table->timestamps();

            $table->foreignUuid('mission_id')->references('id_mission')->on('missions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaires');
    }
};
