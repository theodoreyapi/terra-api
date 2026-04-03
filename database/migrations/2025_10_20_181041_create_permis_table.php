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
        Schema::create('permis', function (Blueprint $table) {
            $table->uuid('id_permis')->primary();
            $table->string('recto_permis');
            $table->string('verso_permis');
           
            $table->foreignUuid('agent_id')->references('id_agent')->on('agents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permis');
         Schema::table('permis', function (Blueprint $table) {
            $table->dropForeign(['agent_id']);
            $table->dropColumn('agent_id');
        });
    }
};
