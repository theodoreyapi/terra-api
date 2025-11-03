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
        Schema::create('business', function (Blueprint $table) {
            $table->id('id_business')->primary();
            $table->string('name_business');
            $table->string('prenom_business');
            $table->string('phone_business')->unique();
            $table->string('email_business')->unique();
            $table->string('entreprise_business')->unique();
            $table->string('email_entreprise_business')->unique();
            $table->string('localisation_entreprise_business')->nullable();
            $table->integer('otp_business')->nullable();
            $table->string('password_business');
            $table->string('description_business')->nullable();
            $table->string('status', 20)->default('active')->comment('active, inactive');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id_city')->on('city');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id_country')->on('country');
            $table->unsignedBigInteger('secteur_id');
            $table->foreign('secteur_id')->references('id_secteur')->on('secteur_activite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business');
        Schema::table('business', function (Blueprint $table) {
            $table->dropForeign(['country_id', 'city_id', 'secteur_id']);
            $table->dropColumn('country_id');
            $table->dropColumn('city_id');
            $table->dropColumn('secteur_id');
        });
    }
};
