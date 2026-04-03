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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id_transaction')->primary();
            $table->string('type', 30);  // 'credit', 'debit', 'retrait'
            $table->decimal('montant', 12, 2);
            $table->string('description')->nullable();
            $table->string('statut', 20)->default('en_attente'); // 'en_attente','complete','echoue'
            $table->string('reference')->nullable()->unique();
            $table->foreignUuid('wallet_id')->references('id_wallet')->on('wallets')->onDelete('cascade');
            $table->foreignUuid('mission_id')->nullable()->references('id_mission')->on('missions')->nullOnDelete();
            $table->timestamps();
            $table->index('wallet_id');
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
