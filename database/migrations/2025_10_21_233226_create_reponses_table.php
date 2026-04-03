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
        Schema::create('reponses', function (Blueprint $table) {
            $table->uuid('id_reponse')->primary();


            $table->json('donnees'); // Stockage flexible des réponses
            $table->string('longitude')->nullable(); // Coordonnées GPS
            $table->string('latitude')->nullable(); // Coordonnées GPS

            $table->string('statut', 20)->default('soumis'); // 'soumis', 'valide', 'rejete'
            $table->timestamp('submitted_at')->useCurrent();
            $table->timestamps();

            $table->foreignUuid('mission_id')->references('id_mission')->on('missions')->onDelete('cascade');
            $table->foreignUuid('formulaire_id')->nullable()->references('id_formulaire')->on('formulaires')->onDelete('cascade');
            $table->foreignUuid('agent_id')->nullable()->references('id_agent')->on('agents')->onDelete('cascade');

            $table->index('mission_id');
            $table->index('agent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reponses');
    }
};
