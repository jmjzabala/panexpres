<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // En la migración
    public function up()
    {
        Schema::create('bakeries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->string('logo')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('opening_hours')->nullable(); // Horarios de apertura/cierre
            $table->enum('status', ['open', 'closed'])->default('closed'); // Estatus de la panadería
            $table->integer('delivery_time')->nullable(); // Tiempo de entrega en minutos
            $table->decimal('average_rating', 3, 2)->default(0.00); // rating promedio de la panadería
            // metodos de envío disponibles (por ejemplo: pickup, delivery)
            $table->json('delivery_methods')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bakeries');
    }
};
