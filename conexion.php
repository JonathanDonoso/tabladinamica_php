<?php 

//  class conexion{
      
       
      
    //   public function con(){
           
    //    $url="localhost";
      //  $usuario="root";
    //    $password="1234";
      //  $bd="pruebas";   
           
     
    //    $mysqli=new mysqli($url,$usuario,$password,$bd);
      //  $mysqli->query("SET NAMES 'utf8'");
              
              
    //    if(!$mysqli){
      //      echo 'error de conexión', mysqli_connect_errno();
    //    }else{
            //echo 'conectado';
  //      }
 
//    }
     

      
      
  //}
       
  
    
       // $mm=new conexion();
        //$mm->con();   
       
    
    $url="localhost";
    $usuario="root";
    $password="1234";
    $bd="pruebas";

 
     $mysqli=new mysqli($url,$usuario,$password,$bd);
     $mysqli->query("SET NAMES 'utf8'");
     
      if(!$mysqli){
          echo 'error al conectarse',mysqli_connect_errno();
          
      }else{
        //  echo 'conectado';
      }



?>
