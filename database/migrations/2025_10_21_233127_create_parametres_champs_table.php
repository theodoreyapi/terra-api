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
        Schema::create('parametres_champs', function (Blueprint $table) {
            $table->uuid('id_param_champs')->primary();

            $table->boolean('rendre_facultatif')->default(false);
            $table->boolean('rendre_obligatoire')->default(false);
            $table->boolean('gestion_appelite')->default(false);
            $table->timestamps();

            $table->foreignUuid('champ_id')->references('id_champ_formulaire')->on('champs_formulaire')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametres_champs');
    }
};
