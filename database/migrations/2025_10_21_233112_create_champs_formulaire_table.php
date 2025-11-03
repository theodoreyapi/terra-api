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
       Schema::create('champs_formulaire', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('formulaire_id');
            $table->string('type_champ', 50); // 'nom', 'prenoms', 'date_naissance', etc.
            $table->string('label', 255);
            $table->boolean('obligatoire')->default(false);
            $table->integer('ordre');
            $table->json('jours_options')->nullable();
            $table->json('mois_options')->nullable();
            $table->json('annee_options')->nullable();
            $table->json('options')->nullable(); // Configurations spécifiques
            $table->timestamps();

            $table->foreign('formulaire_id')->references('id')->on('formulaires')->onDelete('cascade');
            $table->index('formulaire_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champs_formulaire');
    }
};
