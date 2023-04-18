<?php
    $conexion=mysqli_connect('localhost','root','','tracto');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Empleados</title>
</head>
<body>
<h1>Agregar empleado</h1>
        <form action="/empleado" method="POST">
            @csrf
            <label for="nomb_completo">Nombre completo</label><br>
            <input type="text" name="nomb_completo" id="nomb_completo" value="{{ old('nomb_completo') }}" required><br>
            @error('nomb_completo')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>

            <label for="nomb_corto">Nombre corto</label><br>
            <input type="text" name="nomb_corto" id="nomb_corto" value="{{ old('nomb_corto') }}" required><br>
            @error('nomb_corto')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>

            <label for="correo">Correo electronico</label><br>
            <input type="text" name="correo" id="correo"><br>
            @error('correo')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>

            <label for="n_nomina">Numero de nomina</label><br>
            <input type="number" name="n_nomina" id="n_nomina" value="{{ old('n_nomina') }}" required><br>
            @error('n_nomina')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>

            <label for="puesto">Puesto</label><br>
            <input type="text" name="puesto" id="puesto" value="{{ old('puesto') }}" required><br>
            @error('puesto')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>

            <label for="departamento">Departamento</label><br>
            <select name="departamento" id="departamento">
                <option selected>Seleccionar departamento</option>
                <option value="Sistemas">Sistemas</option>
                <option value="Almacen">Almacén</option>
                <option value="Administracion">Administración</option>
                <option value="Calidad">Calidad</option>
                <option value="Compras">Compras</option>
                <option value="Contabilidad">Contabilidad</option>
                <option value="Marketing">Marketing</option>
                <option value="Produccion">Producción</option>
                <option value="Recursos Humanos">Recursos Humanos</option>
                <option value="Sucursales">Sucursales</option>
                <option value="Ventas">Ventas</option>
            </select>
            @error('departamento')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>
            <br>

            <label for="fecha_ingreso">Fecha de ingreso</label><br>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" min="1950-01-01" max="2099-01-01">
            @error('fecha_ingreso')
                <h5>{{$meesage }}</h5>
            @enderror
            <br><br>

            <input type="submit" value="Agregar empleado">
            <br><br>
            <a href="/empleado"><button>Regresar</button></a>
        </form>
</body>
</html>
