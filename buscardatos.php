<meta charset="utf-8">


 <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-4">
                        
                                    <?php 
          
                     require_once("conexion.php");
                       
                      $cons="select id,nombre,apellido,email,telefono from t_persona";
                      $result=mysqli_query($mysqli,$cons);
                     ?>
                     
                     
                      <select name="busqueda" id="filtrar" class="form-control input sm" >     
                                   <option value="0">Buscar aquí</option>
                                <?php 
                          
                                 while($f=mysqli_fetch_row($result)){ 
                              ?>
                                <option value="<?php  echo $f[0] ?>"><?php echo $f[1]." ".$f[2] ?></option>
                                <?php  }?>
                               </select>
                        
                    </div>
                    
                    
                </div>              
                              
                
                           
    </div>
          
    
   
      <script>
          
    
          
        $(document).ready(function(){
             $("#filtrar").select2();
              
               $("#filtrar").change(function(){
                  
                   $.ajax({
                      
                       type:"POST",
                       url:"crearsesion.php",
                       data:'valor='+$("#filtrar").val(),
                       success:function(r){
                       
                       
                       $("#tabla").load("tabla.php");
                   }
                   });
               });
            
            }); 
              
        //      $("#select2-filtrar-container").css({
                  
        //          "background-color":"#343434",
        //          "color":"#fff",
          //        "font-weight":"bolder",
        //          "padding":"5px 8px", 
               
      //        });
              
    //        $("span .select2-selection").css({
                
          //      "margin-bottom":"20px",
        //        "border-radius":"4px 4px 4px 4px",                             
          //      "width":"300px", 
        //        "float":"right", 
              
                
          //      });  
              
        //      $("span .select2-selection--single").css({
                  
            //      "font-size":"14px",
           //       "text-align":"center",
          //        "font-weight":"bold",
                  
        //      });
              
            //  $("span .select2-selection__arrow b").css({
                  
            //      "border-color":"#fff transparent transparent transparent",
            //      "font-size":"12px",
            //      "border-width":"5px 5px 5px 5px",
            //      "top":"75%",
            //      "left":"10%",    
          //    });
              
              
              
        //      $("span .select2-selection__rendered").css({"cursor":"pointer"});
              
            //  $("input .select2-search__field").css({
                  
              //    "border":"2px solid #40a0bb",
            //      "background-color":"aliceblue",
              //    "font-size":"15px",
            //      "font-weight":"bold",
                  
            //  });
            
            
           
                

         
            
        
      </script>

  
     
