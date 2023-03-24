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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            //nom de l'hotel
            $table->string('name');

            //image de l'hotel
            $table->string('hero_image')->nullable();

            //longtitude et latitude
            $table->float('longitude');
            $table->float('latitude');

            //description de l'hotel
            $table->text('description');

            //nombre d'étoiles
            $table->integer('stars');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
