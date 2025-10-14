<?php
$host = '127.0.0.1:3308';
$user = 'root';
$pass = '123456';
$dbName = 'crud_app';

$conn = new mysqli( $host,$user,$pass,$dbName);

if( $conn -> connect_error){
    die('Erro en la conexion de mi db :( : '.$conn->connect_error);
}else{
    echo "Conexion con exito :3";
}
    
?>