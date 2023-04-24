<!-- resources/views/tasks.blade.php -->
<?php
    $conexion=mysqli_connect('localhost','root','','tracto');
?>

<x-layout>
    <title>Empleados</title>            
            <h1>Empleados</h1>

            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{route('empleado.create')}}">Agregar empleado</a>
                </div>
            </div>
            

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre completo</th>
                                <th>Nombre corto</th>
                                <th>Correo</th>
                                <th>Numero de nomina</th>
                                <th>Puesto</th>
                                <th>Departamento</th>
                                <th>Fecha de ingreso</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr>
                                    <td>{{$empleado->id}}</td>
                                    <td>{{$empleado->nomb_completo}}</td>
                                    <td>{{$empleado->nomb_corto}}</td>
                                    <td>{{$empleado->correo}}</td>
                                    <td>{{$empleado->n_nomina}}</td>
                                    <td>{{$empleado->puesto}}</td>
                                    <td>{{$empleado->departamento}}</td>
                                    <td>{{$empleado->fecha_ingreso}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="empleado/{{ $empleado->id }}/edit">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{ route('empleado.destroy', $empleado) }} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</x-layout>