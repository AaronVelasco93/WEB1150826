<?php
 //conexion
 include("./db.php");
 
 //datos del form desde html
 $nombre=$_GET['nombre'];
 $email=$_GET['email'];
 $telefono=$_GET['telefono'];

 $sql = "INSERT INTO usuarios (nombre, email, telefono)VALUE ('$nombre','$email','$telefono')";
 if( $conn ->query($sql) === true){
    header('Location: ../registro.html');
    exit();
 }else{
    echo "Error".$sql."<br>".$conn->error;
 }
 
 
 ?>