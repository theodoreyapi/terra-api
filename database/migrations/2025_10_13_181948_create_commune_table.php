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
        Schema::create('commune', function (Blueprint $table) {
            $table->uuid('id_commune')->primary();
            $table->string('name_commune')->unique();
            $table->string('status', 20)->default('active')->comment('active, inactive');

            $table->foreignUuid('city_id')->references('id_city')->on('city')->onDelete('cascade');
          
            $table->foreignUuid('country_id')->references('id_country')->on('country')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commune');
        Schema::table('commune', function (Blueprint $table) {
            $table->dropForeign(['country_id', 'city_id']);
            $table->dropColumn('country_id');
            $table->dropColumn('city_id');
        });
    }
};
