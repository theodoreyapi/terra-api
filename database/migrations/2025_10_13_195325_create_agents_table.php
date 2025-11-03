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
        Schema::create('agents', function (Blueprint $table) {
            $table->id('id_agent')->primary();
            $table->string('genre_agent');
            $table->string('name_agent');
            $table->string('lastname_agent');
            $table->string('profession_agent');
            $table->string('naissance_agent');
            $table->string('email_agent')->unique();
            $table->string('phone_agent')->unique();
            $table->string('longitude_agent')->nullable();
            $table->string('latitude_agent')->nullable();
            $table->string('status', 20)->default('active')->comment('active, inactive');
            $table->string('image_agent')->nullable();
            $table->string('experience_mission_agent')->comment('oui, non');
            $table->string('permis_agent')->comment('oui, non');
            $table->string('password_agent');
            $table->unsignedBigInteger('diplome_id');
            $table->foreign('diplome_id')->references('id_diplome')->on('diplomes');
            $table->unsignedBigInteger('etude_id');
            $table->foreign('etude_id')->references('id_etude')->on('etudes');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id_city')->on('city');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id_country')->on('country');
            $table->unsignedBigInteger('commune_id');
            $table->foreign('commune_id')->references('id_commune')->on('commune');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
        Schema::table('agents', function (Blueprint $table) {
            $table->dropForeign(['country_id', 'city_id', 'commune_id', 'diplome_id', 'etude_id']);
            $table->dropColumn('country_id');
            $table->dropColumn('city_id');
            $table->dropColumn('commune_id');
            $table->dropColumn('diplome_id');
            $table->dropColumn('etude_id');
        });
    }
};
