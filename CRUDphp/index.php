<?php
    include('./logica/db.php');
    $consulta= "SELECT * FROM usuarios";
    $result = $conn->query($consulta);
?>
<?php include('./head.php'); ?>

    <h1>Usuarios</h1>
    <a href="./create.php">Agregar Usuario bandera 1</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td>
                <a href="./update.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a href="./logica/delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>

<?php  include('./footer.php');  ?>