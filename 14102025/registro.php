<?php  include ("./header.php")  ?>
    <main>
        <br><br>
    <form action="./logica/create.php" method="get">
        
        <label for="">Nombre</label>
            <input name="nombre" type="text" maxlength="100" required placeholder="Ingresa tu nombre">
        <br>
        <label for="">Email:</label>
            <input name="email" type="email" maxlength="100" required placeholder="Correo">
        <br>
        <label for="">Telefono: </label>
            <input name="telefono" type="text" maxlength="10" required placeholder="Numero de celular">
        <br>
        <button type="submit">Registro</button>   

    </form>
    <br><br>

    </main>

<?php  include ("./footer.php")  ?>