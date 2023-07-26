@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Creación de Usuario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Creacion de Usuarios</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <form action="/users" method="POST">
                        @csrf
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="first_name">Nombres</label><br>
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" required><br>
                        @error('first_name')
                            <h5>{{$meesage }}</h5>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="last_name">Apellidos</label><br>
                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required><br>
                        @error('last_name')
                            <h5>{{$meesage }}</h5>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="email">Correo</label><br>
                        <input type="text" name="email" id="email" value="{{ old('email') }}" required><br>
                        @error('email')
                            <h5>{{$meesage }}</h5>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="password">Contraseña</label><br>
                        <input type="text" name="password" id="password" value="{{ old('password') }}" required><br>
                        @error('password')
                            <h5>{{$meesage }}</h5>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="username">Usuario</label><br>
                        <input type="text" name="username" id="username" value="{{ old('username') }}" required><br>
                        @error('email')
                            <h5>{{$meesage }}</h5>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="start_date">Fecha de ingreso</label><br>
                        <input type="date" name="start_date" id="start_date" min="1950-01-01" max="2099-01-01">
                        @error('start_date')
                            <h5>{{$meesage }}</h5>
                        @enderror
                    </div>

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-12">
            <div class="float-right">
                <button type="submit" class="btn btn-success">Agregar empleado</button>
                <a href="/users" class="btn btn-outline-danger">Regresar</a>
            </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
