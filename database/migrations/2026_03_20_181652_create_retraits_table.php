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
        Schema::create('retraits', function (Blueprint $table) {
            $table->uuid('id_retrait')->primary();
            $table->decimal('montant', 12, 2);
            $table->string('provider', 50);  // 'wave','orange','mtn','moov','visa'
            $table->string('numero_compte');
            $table->string('statut', 20)->default('en_attente');
            // Valeurs : 'en_attente','approuve','rejete','paye','annule'
            $table->text('motif_rejet')->nullable();
            $table->timestamp('date_traitement')->nullable();
            $table->foreignUuid('agent_id')->references('id_agent')->on('agents')->onDelete('cascade');
            $table->foreignUuid('wallet_id')->references('id_wallet')->on('wallets')->onDelete('cascade');
            $table->timestamps();
            $table->index('statut');
            $table->index('agent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retraits');
    }
};
