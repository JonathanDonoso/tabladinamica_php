<?php 

require('conexion.php');

$id=isset($_POST['id']) ? $_POST['id']:null;

$consulta="delete from t_persona where id='$id'";
$resultado=mysqli_query($mysqli,$consulta);

echo $resultado;


?>
