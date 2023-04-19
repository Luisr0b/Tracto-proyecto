<?php
    $conexion=mysqli_connect('localhost','root','','tracto');
?>

<x-layout>
    <h1>Agregar tecnico</h1>
        <form action="/tecnico" method="POST">
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

                <input type="submit" value="Agregar tecnico">
                <br><br>
                <a href="/tecnico"><button>Regresar</button></a>
        </form>

</x-layout>