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

                <a href="" title="Crear Usuario">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

        </div>

        <div class="card-footer">
            Footer
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
