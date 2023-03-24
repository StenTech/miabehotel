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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            // foreign key hotel_id et la clé primaire de la table hotel
            $table->foreignId('hotel_id')
                ->references('id')
                ->on('hotels')
                ->constrained('hotel');
            // foreign key user_id et la clé primaire de la table users
            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->constrained('users');
            // foreign key gestionnaire_id et la clé primaire de la table gestionnaire
            $table->foreignId('gestionnaire_id')
                ->references('id')
                ->on('gestionnaires')
                ->constrained('gestionnaires');

            // date de début de la réservation
            $table->date('date_debut');
            // date de fin de la réservation
            $table->date('date_fin');
            // prix total
            $table->float('prix_total');

            // description de la réservation
            $table->string('description');

            // status de la réservation
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
