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
        Schema::create('comida_equipo4', function (Blueprint $table) {
            $table->id('id_comida_equipo4');
            $table->string('nombre_comida', 100);
            $table->decimal('costo_comida', 8, 2);
            $table->text('detalle_comida');
            // creamos la llave foranea para relacionar con la tabla de tipos de comida
            $table->unsignedBigInteger('id_tipo_comida_equipo4');
            // definimos la relacion de la llave foranea con la tabla de tipos de comida
            $table->foreign('id_tipo_comida_equipo4')
                ->references('id_tipo_comida_equipo4')
                ->on('tipo_comida_equipo4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comida_equipo4');
    }
};
