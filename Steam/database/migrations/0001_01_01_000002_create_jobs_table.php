<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   /* public function up(): void
    {
        // Table pour les jobs
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('queue')->index()->comment('Nom de la file d\'attente');
            $table->longText('payload')->comment('Données relatives au job');
            $table->unsignedTinyInteger('attempts')->default(0)->comment('Nombre de tentatives');
            $table->unsignedInteger('reserved_at')->nullable()->comment('Timestamp de réservation du job');
            $table->unsignedInteger('available_at')->comment('Timestamp de disponibilité du job');
            $table->unsignedInteger('created_at')->comment('Timestamp de création du job');
        });

        // Table pour les lots de jobs
        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary()->comment('Identifiant unique du lot');
            $table->string('name')->comment('Nom du lot');
            $table->integer('total_jobs')->comment('Nombre total de jobs dans le lot');
            $table->integer('pending_jobs')->comment('Nombre de jobs en attente');
            $table->integer('failed_jobs')->comment('Nombre de jobs échoués');
            $table->longText('failed_job_ids')->comment('Liste des IDs des jobs échoués');
            $table->mediumText('options')->nullable()->comment('Options supplémentaires');
            $table->unsignedInteger('cancelled_at')->nullable()->comment('Timestamp d\'annulation du lot');
            $table->unsignedInteger('created_at')->comment('Timestamp de création du lot');
            $table->unsignedInteger('finished_at')->nullable()->comment('Timestamp de fin du lot');
        });

        // Table pour les jobs échoués
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique()->comment('UUID unique du job échoué');
            $table->text('connection')->comment('Connexion utilisée pour le job');
            $table->text('queue')->comment('File d\'attente du job');
            $table->longText('payload')->comment('Données relatives au job échoué');
            $table->longText('exception')->comment('Trace de l\'exception');
            $table->timestamp('failed_at')->useCurrent()->comment('Timestamp de l\'échec');
        });
    }

    /**
     * Reverse the migrations.
     */
    /*
    public function down(): void
    {
        Schema::dropIfExists('failed_jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('jobs');
    }
    */
};
