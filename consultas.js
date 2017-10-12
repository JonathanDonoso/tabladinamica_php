  function agregardatos(nombre,apellido,email,telefono){
        
      cadena="nombre="+nombre+"&apellido="+apellido+"&email="+email+"&telefono="+telefono; 
        
           if(nombre.length=="" && apellido.length=="" && email.length=="" && telefono.length==""){
            
            alertify.error("Campos vacios debes rellenarlos");
            
            return false;
           }
        
      $.ajax({
          
        type:"POST",
        url:"agregardatos.php",  
        data:cadena,  
        success:function(r){
           
                   
             if(r==1){
             alertify.alert("Persona ingresada");
                 
                   
               $("#tabla").load("index.php");
               $("#buscador").load("buscardatos.php"); 
                 
                $("#nombre").val("");
                $("#apellido").val("");
                $("#email").val("");
                $("#telefono").val("");  
           }else{
             
              alertify.error("Fallo el servidor");
             }
            
        
            
             
        }  
          
          
      });  
    
           
           
    }
  
     
    function envio_Datos_al_modal(Datos){
            
            var d=Datos.split("||");   //lo convierte en array y luego en cada posicion obtiene los datos
        
            $("#idE").val(d[0]);  // id del modal editar
            $("#nombreE").val(d[1]);  //nombre del modal editar
            $("#apellidoE").val(d[2]); //apellido del modal editar
            $("#emailE").val(d[3]); //email del modal editar
            $("#telefonoE").val(d[4]); //telefono del modal editar
    }
   




    function editar_datos(){
           
         
            var id=$("#idE").val();  // id del modal editar
            var nombre=$("#nombreE").val();  //nombre del modal editar
            var apellido=$("#apellidoE").val(); //apellido del modal editar
            var email=$("#emailE").val(); //email del modal editar
            var telefono=$("#telefonoE").val(); //telefono del modal editar
          
        
         cadena="id="+id+"&nombre="+nombre+"&apellido="+apellido+"&email="+email+"&telefono="+telefono; // variables para php
        
          $.ajax({
          
        type:"POST",
        url:"editardatos.php",  
        data:cadena,  
        success:function(r){
           
                   
             if(r==1){
                   
             alertify.alert("Los datos fueros modificados con éxito");
                $("#tabla").load("index.php");
                 
          
           }else{
             
              alertify.error("Fallo el servidor");
             }
            
        
            
             
        }  
          
          
      }); 
        
        
        
    }


   function preguntar_eliminar(id){
       
     alertify.confirm('Seguro que eliminarás a '+id+' ?', function(e){ 
         
          if(e){
             eliminar_datos(id); 
             alertify.alert("Persona eliminada");
          }else{
              alertify.error("Cancelado");
          }
         
          
     
     
      });
			
     return false;  
       
       
   }
    

function eliminar_datos(id){
    
    
    cadena="id="+id;
    
    $.ajax({
        
       type:"POST", 
       url:"eliminardatos.php",
       data:cadena,
       success: function(r){
           
           if(r==1){
               
                $("#tabla").load("index.php");
                 alertify.success("OK");
           }else{
               
               alertify.error("Falló el servidor");
           }
           
           
       }   
        
        
    });
    
    
    
    
}




 
    

    
