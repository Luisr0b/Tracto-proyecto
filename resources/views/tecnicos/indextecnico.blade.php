<?php
    $conexion=mysqli_connect('localhost','root','','tracto');
?>
<x-layout>
    <h1>Tecnicos</h1>

    <a href="tecnico/create"><button>Agregar tecnico</button></a><br><br>

    <table class="table table-bordered border-1">
        <tr>
            <td>ID</td>
            <td>Nombre completo</td>
            <td>Nombre corto</td>
        </tr>

        <?php
        $sql="SELECT * from tecnicos";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            ?>
            
        <tr>
            <td><?php echo $mostrar['id'] ?></td>
            <td><?php echo $mostrar['nomb_completo'] ?></td>
            <td><?php echo $mostrar['nomb_corto'] ?></td>
        </tr>
        <?php
        }
        ?>
        
    </table>
        <ul>
            @foreach ($tecnicos as $tecnico)
                <li>{{ $tecnico['nomb_completo'] }} - {{ $tecnico['nomb_corto'] }} <a href="tecnico/{{ $tecnico->id }}"><button>Detalles</button></a></li>
            @endforeach

        </ul> 
</x-layout>