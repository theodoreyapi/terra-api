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
        Schema::create('mission_agents', function (Blueprint $table) {
            $table->uuid('id_mission_agent')->primary();
            $table->string('statut', 20)->default('invite');
            // Valeurs possibles : 'invite', 'accepte', 'refuse', 'actif', 'termine'
            $table->decimal('remuneration', 10, 2)->nullable();
            $table->integer('objectif_agent')->nullable();
            $table->timestamp('date_acceptation')->nullable();
            $table->foreignUuid('mission_id')->references('id_mission')->on('missions')->onDelete('cascade');
            $table->foreignUuid('agent_id')->references('id_agent')->on('agents')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['mission_id', 'agent_id']);
            $table->index('statut');
            $table->index('mission_id');
            $table->index('agent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mission_agents');
    }
};
