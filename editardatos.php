<?php 


   require('conexion.php');

        
        
        $id=isset($_POST['id']) ?$_POST['id']:null;
        $nombre=isset($_POST['nombre'])? $_POST['nombre']:null;
        $apellido=isset($_POST['apellido'])? $_POST['apellido']:null;
        $email=isset($_POST['email'])? $_POST['email']:null;
        $telefono=isset($_POST['telefono']) ? $_POST['telefono']:null;
        
       $consulta="UPDATE t_persona SET nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono' WHERE id='$id'";
  $resultado=$mysqli->query($consulta);

   echo $resultado;  
    

 


?>
