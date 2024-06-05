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
        Schema::create('pis', function (Blueprint $table) {
            $table->id();
            $table->string('nom_referencia');
            $table->string('direccio');
            $table->integer('m2');
            $table->integer('habitacions');
            $table->integer('lavabos');
            $table->integer('preu');
            $table->string('tipus_cuina');
            $table->string('estat');
            $table->text('descripcio');
            $table->boolean('ascensor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pis');
    }
};
