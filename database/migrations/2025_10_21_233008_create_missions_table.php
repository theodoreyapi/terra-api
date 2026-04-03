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
        Schema::create('missions', function (Blueprint $table) {
            $table->uuid('id_mission')->primary();
            $table->string('type_mission', 50); // 'recrutement', 'recensement', etc.
            $table->string('cible', 20); // 'entreprises' ou 'personnes'
            $table->string('nom_application', 255);
            $table->text('logo_url')->nullable();
            $table->string('couleur_primaire', 7)->nullable(); // #RRGGBB
            $table->string('couleur_secondaire', 7)->nullable();
            $table->boolean('dark_mode')->default(false);
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();

            $table->foreignUuid('country_id')->nullable()->references('id_country')->on('country');
            $table->foreignUuid('city_id')->nullable()->references('id_city')->on('city');
            $table->foreignUuid('commune_id')->nullable()->references('id_commune')->on('commune');

            $table->integer('objectif_nombre')->nullable();
            $table->integer('objectif_duree')->nullable();
            $table->string('objectif_unite', 20)->nullable(); // 'jours', 'mois'
            $table->boolean('methode_api')->default(false);
            $table->string('statut', 20)->default('brouillon'); // 'brouillon', 'actif', 'termine'

            $table->timestamps();

            $table->foreignUuid('created_by')->nullable()->constrained('business', 'id_business')->nullOnDelete();
            $table->index('type_mission');
            $table->index('statut');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
