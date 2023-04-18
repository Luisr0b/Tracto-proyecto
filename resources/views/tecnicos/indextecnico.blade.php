<?php
    $conexion=mysqli_connect('localhost','root','','tracto');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnicos</title>
</head>
<body>
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
</body>
</html>