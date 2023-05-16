<!-- resources/views/tasks.blade.php -->
 
<x-layout>
    <title>Tecnicos</title> 
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
</x-layout>