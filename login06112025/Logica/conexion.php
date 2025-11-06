<?php
$host = "localhost:3308";
$user = "root";
$pass = "123456";
$db = "login_db";

$conn = new mysqli($host,$user,$pass,$db);

if( $conn ->connect_error ){
    die("Conexion con error". $conn->connect_error);
}else{
    echo "<h1>Conexion con exito</h1>";
}

?>