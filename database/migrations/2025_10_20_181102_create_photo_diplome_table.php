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
        Schema::create('photo_diplome', function (Blueprint $table) {
            $table->uuid('id_photo_diplome')->primary();
            $table->string('recto_diplome');
            $table->string('verso_diplome');
           
            $table->foreignUuid('agent_id')->references('id_agent')->on('agents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_diplome');
        Schema::table('photo_diplome', function (Blueprint $table) {
            $table->dropForeign(['agent_id']);
            $table->dropColumn('agent_id');
        });
    }
};
