<?php

namespace App\Http\Controllers;


use App\Models\ComidaEquipo4;
use App\Models\TipoComidaEquipo4;
use Illuminate\Http\Request;

class ComidaEquipo4Controller extends Controller
{

    // CRUD CREAR, GUARDAR, MOSTRAR, EDITAR, ACTUALIZAR Y ELIMINAR LAS COMIDAS
    public function index()
    {
        $comidas = ComidaEquipo4::with('tipo_comida_equipo4')->get();

        return view('comida_equipo4.inicio', compact('comidas'));
    }


    // CREAR LAS COMIDAS
    public function create()
    {

        $tipos = TipoComidaEquipo4::all();

        return view('comida_equipo4.nuevo', compact('tipos'));
    }

    // GUARDAR LAS COMIDAS
    public function store(Request $request)
    {

        ComidaEquipo4::create([

            'nombre_comida' => $request->nombre_comida,

            'costo_comida' => $request->costo_comida,

            'detalle_comida' => $request->detalle_comida,

            'id_tipo_comida_equipo4' => $request->id_tipo_comida_equipo4

        ]);

        return redirect()->route('comida_equipo4.index');
    }

    // MOSTRAR LAS COMIDAS
    public function show($id)
    {

        $comida = ComidaEquipo4::findOrFail($id);

        return view('comida_equipo4.show', compact('comida'));
    }

    // EDITAR LAS COMIDAS
    public function edit($id)
    {

        $comida = ComidaEquipo4::findOrFail($id);

        $tipos = TipoComidaEquipo4::all();

        return view('comida_equipo4.editar', compact('comida', 'tipos'));
    }

    // ACTUALIZAR LAS COMIDAS
    public function update(Request $request, $id)
    {

        $comida = ComidaEquipo4::findOrFail($id);

        $comida->update([

            'nombre_comida' => $request->nombre_comida,

            'costo_comida' => $request->costo_comida,

            'detalle_comida' => $request->detalle_comida,

            'id_tipo_comida_equipo4' => $request->id_tipo_comida_equipo4

        ]);

        return redirect()->route('comida_equipo4.index');
    }

    // ELIMINAR LAS COMIDAS
    public function destroy($id)
    {

        ComidaEquipo4::destroy($id);

        return redirect()->route('comida_equipo4.index');
    }
}
