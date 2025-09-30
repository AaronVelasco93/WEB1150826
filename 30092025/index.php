<?php
    include ('./logica/conexion.php');
    
    $consultaSQL = "SELECT * FROM usuarios";

    $resultado = $conexion->query($consultaSQL);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de datos</title>
</head>
<body>
    <div>
        <h1>Lista de datos</h1>
    </div>    
    <hr>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        <?php   while( $row = $resultado->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nombre'];?></td><!-- nombre -->
                <td><?php echo $row['email'];?></td><!--  correo-->
                <td><?php echo $row['telefono'];?></td><!-- telefono-->
                <td>
                    <a href="">Editar</a>
                    <a href="">Eliminar</a>
                </td>
            </tr>
            <?php  }?>
        </table>
    </div>


</body>
</html>