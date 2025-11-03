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
            $table->uuid('id')->primary();
            $table->uuid('mission_id');
            $table->uuid('formulaire_id')->nullable();
            $table->json('donnees'); // Stockage flexible des réponses
            $table->point('localisation')->nullable(); // Coordonnées GPS
            $table->uuid('agent_id')->nullable();
            $table->string('statut', 20)->default('soumis'); // 'soumis', 'valide', 'rejete'
            $table->timestamp('submitted_at')->useCurrent();
            $table->timestamps();

            $table->foreign('mission_id')->references('id')->on('missions')->onDelete('cascade');
            $table->foreign('formulaire_id')->references('id')->on('formulaires')->onDelete('set null');
            $table->foreign('agent_id')->references('id')->on('users')->onDelete('set null');

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
