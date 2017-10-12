<!DOCTYPE html>
<html lang="es">
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
    <script src="js/alertify.min.js"></script>
    <link rel="stylesheet" href="css/select2.css">
    
</head>
<body>
      <?php  session_start(); unset($_SESSION['consulta']); ?>
     <div class="container">
         <br><br>
         <div id="buscador"></div>  
         <div id="tabla"></div>
          

         
     </div>
      
      <!-- Modal para ingresar nuevo -->
<div class="modal fade" id="Modalingresar"   tabindex="-1" role="document" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-sm">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text text-center" id="myModalLabel">Ingresar nueva persona</h4>
      </div>
      <div class="modal-body">
         <label for="nombre">Nombre</label>
         <input type="text" class="form-control input-sm" id="nombre" name="nombre">
         <br>
         <label for="apellido">Apellido</label>
         <input type="text" class="form-control input-sm" id="apellido" name="apellido">
         <br>
         <label for="correo">Correo electrónico</label>
         <input type="text" class="form-control input-sm" id="email" name="email">
         <br>
         <label for="telefono">Teléfono</label>
         <input type="text" class="form-control input-sm" id="telefono" name="telefono">
         <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary glyphicon glyphicon-plus btn-sm" data-dismiss="modal" id="guardaringreso"> Guardar</button>
        
      </div>
    </div>
  </div>
</div>
    
     <!-- Modal para editar persona -->
<div class="modal fade" id="Modaleditar" tabindex="-1" role="document" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-sm">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text text-center" id="myModalLabel">Editar persona</h4>
      </div>
      <div class="modal-body">
         <input type="text" hidden="" id="idE" name="id">
         <label for="nombre">Nombre</label>
         <input type="text" class="form-control input-sm" id="nombreE" name="nombre">
         <br>
         <label for="apellido">Apellido</label>
         <input type="text" class="form-control input-sm" id="apellidoE" name="apellido">
         <br>
         <label for="correo">Correo electrónico</label>
         <input type="text" class="form-control input-sm" id="emailE" name="email">
         <br>
         <label for="telefono">Teléfono</label>
         <input type="text" class="form-control input-sm" id="telefonoE" name="telefono">
         <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning glyphicon glyphicon-pencil btn-sm" data-dismiss="modal" id="editaringreso" name="editar"> Guardar edición</button>
        
      </div>
    </div>
  </div>
</div>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/consultas.js"></script>
    <script src="js/select2.js"></script>
    
      <script>
          
          $(document).ready(function(){
              
              $("#tabla").load("tabla.php");
              $("#buscador").load("buscardatos.php");
              
              
          });
        
      </script>
      
    
    
    
     <script type="text/javascript">
        
            $(document).ready(function(){
            
                
                
         $("#guardaringreso").click(function(){
              
            var nombre =  $("#nombre").val();
            var apellido =  $("#apellido").val();
            var email =  $("#email").val();
            var telefono =  $("#telefono").val();
              
               agregardatos(nombre,apellido,email,telefono);
               
        
             
             
             
                });
                
                 
              $("#editaringreso").click(function(){
                  
                 editar_datos();
              });  
                
              $("#elim").click(function(id){
                  
                 
                 eliminar_datos(id); 
                  
              });
                
                
           
                
                
                
            });
            
        
            
        
        
        
    </script>
    
    
    
    
    
</body>
</html>
