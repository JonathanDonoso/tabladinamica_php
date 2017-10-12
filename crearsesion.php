<?php 


 require("conexion.php");

session_start();

$idp=isset($_POST['valor'])? $_POST['valor']:null;

$_SESSION['consulta']=$idp;


echo $idp;

?>
