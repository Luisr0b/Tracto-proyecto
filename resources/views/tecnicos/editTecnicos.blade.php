<x-layout>
    <title>Tecnicos</title> 
        <h1>Editar Tecnico</h1>

            <form action="/tecnico/{{$tecnico->id}}" method="POST">
                @csrf
                @method('PATCH')
                <label for="nomb_completo">Nombre completo</label><br>
                <input type="text" name="nomb_completo" value='{{ old('nomb_completo') ?? $tecnico->nomb_completo }}' required>
                @error('nomb_completo')
                    <h5>{{$meesage }}</h5>
                @enderror
                <br><br>

                <label for="nomb_corto">Nombre corto</label><br>
                <input type="text" name="nomb_corto" value='{{ $tecnico->nomb_corto }}' required><br>
                @error('nomb_corto')
                    <h5>{{$meesage }}</h5>
                @enderror
                <br>

                <input type="submit" value="Editar tecnico">
                <br><br>
            </form>
                <a href="/tecnico"><button>Regresar</button></a>
</x-layout>