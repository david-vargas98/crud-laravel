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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('descripcion');
            $table->dateTime('due_date')->nullable(); //Fecha límite en que se ejecuta, nullable para permitir nulos
            $table->enum('status', ['Pendiente', 'En progreso', 'Completada'])->nullable(); //Almacena status de cada tarea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};