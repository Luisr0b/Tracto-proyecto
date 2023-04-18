<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Detalle de tecnico</h1>
    <ul>
        <li>
            Nombre completo: {{ $tecnico->nomb_completo}}
        </li>
        <li>
            Nombre corto: {{ $tecnico->nomb_corto}}
        </li>
    </ul>
    <a href="/tecnico/{{ $tecnico->id }}/edit"><button>Editar</button></a>
    <br><br>
    <form action="{{ route('tecnico.destroy', $tecnico) }} " method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar</button>
    </form>
    <br>
    <a href="/tecnico"><button>Regresar</button></a>
</body>
</html>