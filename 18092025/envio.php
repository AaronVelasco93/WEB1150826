<?php
$nombre_get = $_POST['nombre'];
$apellidos_get =$_POST['primerApellido'];

$nombreCompleto = $nombre_get .' '. $apellidos_get;
echo ($nombreCompleto);

?>