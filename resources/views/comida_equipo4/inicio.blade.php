<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Comidas Cafeteria UTVT Equipo 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex align-items-center justify-content-center mb-3">
        <h1 class="m-0"> Comida Cafetería</h1>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC4UK7r1s_OX99brSuwz_DVuV_IU6L0_WCBg&s"
            class="img-thumbnail me-3"
            style="width: 100px; height: auto;">
    </div>
    <a href="{{ route('comida_equipo4.create') }}" class="btn btn-primary mb-3"> Crear nueva comida </a>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Nombre</th>
                <th>Costo</th>
                <th>Detalle</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comidas as $comida)
            <tr>
                <td class="text-center">{{ $comida->id_comida_equipo4 }}</td>
                <td class="text-center">{{ $comida->nombre_comida }}</td>
                <td class="text-center">{{ $comida->costo_comida }}</td>
                <td class="text-center">{{ $comida->detalle_comida }}</td>
                <td>
                    {{ $comida->tipo_comida_equipo4->nombre_categoria }}
                </td>
                <td>
                    <a href="{{ route('comida_equipo4.edit',$comida->id_comida_equipo4) }}" class="btn btn-warning"> Editar </a>
                    <form action="{{ route('comida_equipo4.destroy',$comida->id_comida_equipo4) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar esta comida?')"> Eliminar </button>
                    </form>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
    <footer>
        <p>&copy; 2026 Derechos Reservados Alexa, Ariel, Ricardo</p>
    </footer>
</body>
</html>