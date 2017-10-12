<?php 
  
  require('conexion.php');

 $nombre=isset($_POST['nombre'])? $_POST['nombre']:null;
 $apellido=isset($_POST['apellido'])? $_POST['apellido']:null;
 $email=isset($_POST['email'])? $_POST['email']:null;
 $telefono=isset($_POST['telefono'])? $_POST['telefono']:null;


  $consulta="insert into t_persona(nombre,apellido,email,telefono) values('$nombre','$apellido','$email','$telefono')";
  $resultado=$mysqli->query($consulta);
   
  echo $resultado;



?>
