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
            $table->uuid('id')->primary();
            $table->string('type_mission', 50); // 'recrutement', 'recensement', etc.
            $table->string('cible', 20); // 'entreprises' ou 'personnes'
            $table->string('nom_application', 255);
            $table->text('logo_url')->nullable();
            $table->string('couleur_primaire', 7)->nullable(); // #RRGGBB
            $table->string('couleur_secondaire', 7)->nullable();
            $table->boolean('dark_mode')->default(false);
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('pays', 100)->nullable();
            $table->string('ville', 100)->nullable();
            $table->string('commune', 100)->nullable();
            $table->integer('objectif_nombre')->nullable();
            $table->integer('objectif_duree')->nullable();
            $table->string('objectif_unite', 20)->nullable(); // 'jours', 'mois'
            $table->boolean('methode_api')->default(false);
            $table->string('statut', 20)->default('brouillon'); // 'brouillon', 'actif', 'termine'
            $table->uuid('created_by')->nullable();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
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
