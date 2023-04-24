<x-layout>
    <title>Empleados</title>
<h1>Editar Empleado</h1>

<form action="/empleado/{{$empleado->id}}" method="POST">
    @csrf
    @method('PATCH')
    <label for="nomb_completo">Nombre completo</label><br>
    <input type="text" name="nomb_completo" value='{{ old('nomb_completo') ?? $empleado->nomb_completo }}' required>
    @error('nomb_completo')
        <h5>{{$meesage }}</h5>
    @enderror
    <br><br>

    <label for="nomb_corto">Nombre corto</label><br>
    <input type="text" name="nomb_corto" value='{{ $empleado->nomb_corto }}' required><br>
    @error('nomb_corto')
        <h5>{{$meesage }}</h5>
    @enderror
    <br>

    <label for="correo">Correo electronico</label><br>
    <input type="text" name="correo" value='{{ $empleado->correo }}'><br>
    @error('correo')
        <h5>{{$meesage }}</h5>
    @enderror
    <br>

    <label for="n_nomina">Numero de nomina</label><br>
    <input type="number" name="n_nomina" value='{{ $empleado->n_nomina }}' required><br>
    @error('n_nomina')
        <h5>{{$meesage }}</h5>
    @enderror
    <br>

    <label for="puesto">Puesto</label><br>
    <input type="text" name="puesto" value='{{ $empleado->puesto }}' required><br>
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
        <input type="date" name="fecha_ingreso" value='{{ $empleado->fecha_ingreso }}' min="1950-01-01" max="2099-01-01">
        @error('fecha_ingreso')
            <h5>{{$meesage }}</h5>
        @enderror
        <br><br>

        <input type="submit" value="Editar empleado">
        <br><br>
        <a href="/empleado"><button>Regresar</button></a>
</form>
</x-layout>