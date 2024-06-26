<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->cascadeOnDelete();
            $table->foreignId('pis_id')->constrained('pisos')->cascadeOnDelete();
            $table->timestamp('data_reserva')->default(now());
            $table->enum('estat', ['Per revisar', 'Aprovada', 'Rebutjada'])->default('Per revisar');
            $table->timestamp('data_fi_gestio')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
