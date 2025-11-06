<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Login</h1>
    <br>
    <form action="./Logica/ValidarLogin.php" method="POST" >
        <label for="NombreUser">Nombre de Usuario</label>
            <input type="text" name="nombre_usuario" require>
        <br>
        <label for="Password">Contraseña</label>
            <input type="password" name="password" require>
        <br>
        <button type="submit">Iniciar Sesion</button>
        
    </form>
    
</body>
</html>