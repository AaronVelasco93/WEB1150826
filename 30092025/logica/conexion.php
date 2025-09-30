<?php
// Almacenar .variables donde se tiene informacion de la base de datos y el servidor
/*
    $host = '127.0.0.1:3306';
    $host = 'localhost';
    $host = '127.0.0.1';
*/
$host = '127.0.0.1:3308';
$user='root';
$password='123456';
$dbname='crud_app';

$conexion = new mysqli($host,$user,$password,$dbname);


if($conexion -> connect_error){
    die('Error en la conexion a la DB :( : '.$conexion -> connct_error);
}else{
    echo "Conexion realizada";
}
?>