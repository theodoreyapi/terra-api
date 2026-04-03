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
        Schema::create('pieces', function (Blueprint $table) {
            $table->uuid('id_piece')->primary();
            $table->string('recto_piece');
            $table->string('verso_piece');
            
            $table->foreignUuid('agent_id')->references('id_agent')->on('agents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pieces');
        Schema::table('pieces', function (Blueprint $table) {
            $table->dropForeign(['agent_id']);
            $table->dropColumn('agent_id');
        });
    }
};
