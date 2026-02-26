<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{

    public function up(): void
    {

        Schema::create('tipo_comida_equipo4', function (Blueprint $table) {
            $table->id('id_tipo_comida_equipo4');
            $table->string('nombre_categoria', 50);
            $table->timestamps();
        });

        // INSERTAMOS LAS CATEGORIAS
        DB::table('tipo_comida_equipo4')->insert([
            ['nombre_categoria' => 'Bebidas'],
            ['nombre_categoria' => 'Postres'],
            ['nombre_categoria' => 'Platillos Fuertes'],
            ['nombre_categoria' => 'Entradas'],
            ['nombre_categoria' => 'Sopas'],

        ]);
    }


    public function down(): void
    {

        Schema::dropIfExists('tipo_comida_equipo4');
    }
};
