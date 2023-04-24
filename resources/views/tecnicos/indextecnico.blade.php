<?php
    $conexion=mysqli_connect('localhost','root','','tracto');
?>

<x-layout>
    <title>Tecnicos</title>             
            <h1>Tecnicos</h1>

            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{route('tecnico.create')}}">Agregar tecnico</a>
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
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($tecnicos as $tecnico)
                                <tr>
                                    <td>{{$tecnico->id}}</td>
                                    <td>{{$tecnico->nomb_completo}}</td>
                                    <td>{{$tecnico->nomb_corto}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="tecnico/{{ $tecnico->id }}/edit">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{ route('tecnico.destroy', $tecnico) }} " method="POST">
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