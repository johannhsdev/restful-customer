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
        Schema::create('customers', function (Blueprint $table) {
            $table->string('dni', 45)->primary()->comment('Documento de Identidad');
            $table->unsignedBigInteger('id_reg')->comment('ID de la región');
            $table->unsignedBigInteger('id_com')->comment('ID de la comuna');
            $table->string('email', 120)->comment('Correo Electrónico')->unique();
            $table->string('name', 45)->comment('Nombre');
            $table->string('last_name', 45)->comment('Apellido');
            $table->string('address', 255)->nullable()->comment('Dirección');
            $table->dateTime('date_reg')->comment('Fecha y hora del registro');
            $table->enum('status', ['A', 'I', 'trash'])->default('A')->comment('Estado del registro: A (Activo) I (Desactivo) trash (Registro eliminado)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
