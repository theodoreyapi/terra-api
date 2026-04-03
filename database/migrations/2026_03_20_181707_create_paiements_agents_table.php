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
        Schema::create('paiements_agents', function (Blueprint $table) {
            $table->uuid('id_paiement')->primary();
            $table->decimal('montant', 12, 2);
            $table->string('statut', 20)->default('en_attente'); // 'en_attente','complete','echoue'
            $table->string('provider', 50)->nullable();
            $table->string('reference_paiement')->nullable();
            $table->foreignUuid('mission_id')->references('id_mission')->on('missions')->onDelete('cascade');
            $table->foreignUuid('agent_id')->references('id_agent')->on('agents')->onDelete('cascade');
            $table->foreignUuid('business_id')->references('id_business')->on('business')->onDelete('cascade');
            $table->timestamps();
            $table->index('mission_id');
            $table->index('agent_id');
            $table->index('business_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements_agents');
    }
};
