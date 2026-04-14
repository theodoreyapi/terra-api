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
        Schema::create('wallets', function (Blueprint $table) {
            $table->uuid('id_wallet')->primary();
            $table->decimal('solde', 12, 2)->default(0);
            $table->string('devise', 10)->default('XOF');
            $table->foreignUuid('agent_id')->references('id_agent')->on('agents')->onDelete('cascade');
            $table->timestamps();
            $table->unique('agent_id'); // 1 wallet par agent
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
