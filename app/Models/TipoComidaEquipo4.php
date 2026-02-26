<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoComidaEquipo4 extends Model
{
    use HasFactory;
    // DEFINIMOS LA TABLA A LA QUE SE VA A CONECTAR EL MODELO EQUIPO 4
    protected $table = 'tipo_comida_equipo4';
    protected $primaryKey = 'id_tipo_comida_equipo4';
    // DEFINIMOS LOS CAMPOS QUE SE PUEDEN LLENAR
    protected $fillable = [
        'nombre_categoria'
    ];
    // RELACION 1 A MUCHOS
    public function comidas_equipo4()
    {
        return $this->hasMany(
            ComidaEquipo4::class,
            'id_tipo_comida_equipo4',
            'id_tipo_comida_equipo4'
        );
    }
}
