@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Listado de usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">

            <h3 class="card-title">Usuarios</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i>
                </button>

                <a href="{{ route('users.create')}}" title="Crear Usuario">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo electronico</th>
                            <th>Usuario</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de fin</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->start_date }}</td>
                                <td>{{ $user->end_date }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            {{ $users->render() }}
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
