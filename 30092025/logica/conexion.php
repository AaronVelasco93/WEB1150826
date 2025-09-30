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

$conn = new mysqli($host,$user,$password,$dbname);


if($conn -> connect_error){
    die('Error en la conexion a la DB :( : '.$conn -> connct_error);
}else{
    echo "Conexion realizada";
}
?>