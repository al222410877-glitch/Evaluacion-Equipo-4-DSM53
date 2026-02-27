<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComidaEquipo4 extends Model
{
    use HasFactory;
    protected $table = 'comida_equipo4';

    protected $primaryKey = 'id_comida_equipo4';

       protected $fillable = [
        'nombre_comida',
        'costo_comida',
        'detalle_comida',
        'id_tipo_comida_equipo4'
    ];

    public function tipo_comida_equipo4()
    {
        return $this->belongsTo(TipoComidaEquipo4::class, 'id_tipo_comida_equipo4');
    }
}