<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <div class="d-flex align-items-center justify-content-center mb-3">

        <h1 class="m-0">Editar Comida Cafetería</h1>

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC4UK7r1s_OX99brSuwz_DVuV_IU6L0_WCBg&s"
            class="img-thumbnail me-3"
            style="width: 100px; height: auto;">

    </div>

    <a href="{{ route('comida_equipo4.index') }}" class="btn btn-dark mb-3"> Volver al inicio </a>

    <form action="{{ route('comida_equipo4.update',$comida->id_comida_equipo4) }}" method="POST">

        @csrf

        @method('PUT')


        Nombre

        <input type="text" name="nombre_comida" value="{{ $comida->nombre_comida }}" required class="form-control">

        <br><br>


        Costo

        <input type="text" name="costo_comida" value="{{ $comida->costo_comida }}" required class="form-control">

        <br><br>


        Detalle

        <input type="text" name="detalle_comida" value="{{ $comida->detalle_comida }}" required class="form-control">

        <br><br>


        Categoria

        <select name="id_tipo_comida_equipo4">

            @foreach($tipos as $tipo)

            <option value="{{ $tipo->id_tipo_comida_equipo4 }}"
                {{ $tipo->id_tipo_comida_equipo4 == $comida->id_tipo_comida_equipo4 ? 'selected' : '' }}>

                {{ $tipo->nombre_categoria }}

            </option>

            @endforeach

        </select>


        <br><br>


        <button type="submit" class="btn btn-outline-success"> Actualizar </button>


    </form>

    <footer>
        <p>&copy; 2026 Derechos Reservados Alexa, Ariel, Ricardo</p>
    </footer>

</body>

</html>