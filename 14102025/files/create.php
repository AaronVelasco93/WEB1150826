<?php
 $nombre=$_GET['nombre'];
 $email=$_GET['email'];
 $telefono=$_GET['telefono'];
 

 
/*
    $edad = 31;
    echo $edad."<br>";
    echo $_GET['nombre'];
*/

echo $nombre."<br>";
echo $email."<br>";
echo $telefono."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>

    <div>
        <p>Nombre del Alumno es: <?php echo $nombre; ?></p>
    </div>
    </section>
</body>
</html>



