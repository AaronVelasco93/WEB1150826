
<?php include('../head.php');  ?>
    <h1>Editar Usuario</h1>
    <form method="POST" action="./logica/update2.php?id=<?php echo $id; ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required><br>
        <input type="submit" value="Actualizar Usuario">
    </form>
    <br>
    <a href="../index.php">Volver a la lista</a>


<?php include('../footer.php'); ?>