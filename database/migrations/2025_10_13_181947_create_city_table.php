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
        Schema::create('city', function (Blueprint $table) {
            $table->uuid('id_city')->primary();
            $table->string('name_city')->unique();
            $table->string('status', 20)->default('active')->comment('active, inactive');
        
            $table->foreignUuid('country_id')->references('id_country')->on('country')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city');
        Schema::table('city', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
            $table->dropColumn('country_id');
        });
    }
};
