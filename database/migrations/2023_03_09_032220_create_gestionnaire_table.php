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
        Schema::create('gestionnaires', function (Blueprint $table) {
            $table->id();

            //id de l'hotel
            $table->foreignId('hotel_id')->constrained('hotels')->onDelete('cascade');

            //nom du gestionnaire
            $table->string('name');
            //prenoms du gestionnaire séparés par des caractères blancs
            $table->string('prenoms');
            //email du gestionnaire
            $table->string('email');
            //mot de passe du gestionnaire
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestionnaires');
    }
};
