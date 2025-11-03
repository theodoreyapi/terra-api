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
        Schema::create('langue_agent', function (Blueprint $table) {
            $table->id('id_langue_agent')->primary();
            $table->unsignedBigInteger('langue_id');
            $table->foreign('langue_id')->references('id_langue')->on('langues');
            $table->unsignedBigInteger('agent_id');
            $table->foreign('agent_id')->references('id_agent')->on('agents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langue_agent');
        Schema::table('langue_agent', function (Blueprint $table) {
            $table->dropForeign(['agent_id', 'langue_id']);
            $table->dropColumn('agent_id');
            $table->dropColumn('langue_id');
        });
    }
};
