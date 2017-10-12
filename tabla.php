<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/alertify.core.css">
    <link rel="stylesheet" href="css/alertify.default.css">
    <link rel="stylesheet" href="css/alertify.bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="author Jonathan Donoso" http-equiv="content-type" charset="utf-8">
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> -->
    <script src="js/alertify.min.js"></script>
    <link rel="stylesheet" href="css/select2.min.css">
    
    
    
    
</head>
<body>
     
      <?php 
      require("conexion.php");
      session_start();
                         
       
      ?>
   
    <div class="container">
      
         <div class="row">
            <div class="col-sm-12">
                 <h3>Tablas dinámicas</h3>
                 
                 <table class="table table-hover table-bordered table-responsive table-condensed " id="tabla">
                     <caption>
                         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modalingresar"><span class="glyphicon glyphicon-plus"></span> Ingresar nuevo</button>
                            
                     </caption>
                     
                     <thead>
                         <th class="text text-center">Nombre</th>
                         <th class="text text-center">Apellido</th>
                         <th class="text text-center">Correo electrónico</th>
                         <th class="text text-center">Teléfono</th>
                         <th class="text text-center" colspan="2">Acciones</th>
                     </thead>
                     <tbody>
                        
                        <?php
                            
                         	if(isset($_SESSION['consulta'])){
                                
                                
					               if($_SESSION['consulta'] > 0){
                                       
						$idp=$_SESSION['consulta'];
                                       
						$sql="SELECT id,nombre,apellido,email,telefono 
						from t_persona where id='$idp'";
                                       
					      }else{
                                       
						$sql="SELECT id,nombre,apellido,email,telefono 
						from t_persona";
                                       
					    }
				          }else{
					$sql="SELECT id,nombre,apellido,email,telefono 
						from t_persona";
				}
                            
                          
                              $resultado=mysqli_query($mysqli,$sql); 
                         
                             while($fila=mysqli_fetch_array($resultado)){
                            
                            
                            $Datos=$fila['id']."||".$fila['nombre']."||".$fila['apellido']."||".
                                   $fila['email']."||".$fila['telefono'];     
                             
                         ?>
                        
                        
                         <tr>
                             <td class="text text-center"><?php echo $fila['nombre'] ?></td>
                             <td class="text text-center"><?php echo $fila['apellido'] ?></td>
                             <td class="text text-center"><?php echo $fila['email'] ?></td>
                             <td class="text text-center"><?php echo $fila['telefono'] ?></td>
                             <td class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modaleditar"onclick="envio_Datos_al_modal('<?php echo $Datos; ?>')"><span class="glyphicon glyphicon-pencil"> Editar</span></button></td>
                             <td class="text-center"><button type="button" class="btn btn-danger" onclick="return preguntar_eliminar('<?php echo $fila['nombre']." ".  $fila['apellido'] ?>'); " id="elim"><span class="glyphicon glyphicon-remove"> Eliminar</span></button></td>
                         </tr>
                     </tbody>
                       <?php }  ?>
                      
                        
                 </table>
                 
            </div>
            
            
         </div>
          
         
     </div>
   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/consultas.js"></script>
</body>
</html>
