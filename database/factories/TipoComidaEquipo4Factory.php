<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TipoComidaEquipo4Factory extends Factory
{

    public function definition(): array
    {

        return [

            'nombre_categoria' => $this->faker->randomElement([
                'Bebidas',
                'Postres',
                'Platillos Fuertes',
                'Entradas',
                'Sopas'
            ])

        ];
    }
}
