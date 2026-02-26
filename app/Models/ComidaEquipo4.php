<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\TipoComidaEquipo4;

class ComidaEquipo4 extends Model
{
    // DEFINIMOS LA TABLA A LA QUE SE VA A CONECTAR AL MODELO EQUIPO 4
    use HasFactory;
    protected $table = 'comida_equipo4';
    protected $primaryKey = 'id_comida_equipo4';
    protected $fillable = [
        'nombre_comida',
        'costo_comida',
        'detalle_comida',
        'id_tipo_comida_equipo4'
    ];
    // RELACION MUCHOS A 1
    public function tipo_comida_equipo4()
    {
        return $this->belongsTo(
            TipoComidaEquipo4::class,
            'id_tipo_comida_equipo4',
            'id_tipo_comida_equipo4'
        );
    }
}
