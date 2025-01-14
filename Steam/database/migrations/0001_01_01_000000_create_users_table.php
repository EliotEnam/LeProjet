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

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255); 
            $table->string('email', 191)->unique(); 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email', 191)->primary(); // Longueur ajustée
            $table->string('token', 255); // Taille du token
            $table->timestamp('created_at')->nullable();
        });

    
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id', 191)->primary(); // Longueur ajustée pour id
            $table->foreignId('user_id')->nullable()->index(); // Utilisation de foreignId
            $table->string('ip_address', 45)->nullable(); // IPv4/IPv6
            $table->text('user_agent')->nullable(); // Peut être long, mais ne sera pas indexé
            $table->longText('payload'); // Données de session
            $table->integer('last_activity')->index(); // Index sur l'activité
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
