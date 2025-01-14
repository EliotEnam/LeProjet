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
        // Création de la table cache
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key', 191)->primary(); // Limite à 191 caractères pour compatibilité avec utf8mb4
            $table->mediumText('value'); // Contenu du cache
            $table->integer('expiration'); // Timestamp d'expiration
        });

        // Création de la table cache_locks
        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key', 191)->primary(); // Identifiant unique pour le verrou
            $table->string('owner', 255); // Propriétaire du verrou
            $table->integer('expiration'); // Timestamp d'expiration
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache_locks');
        Schema::dropIfExists('cache');
    }
};
