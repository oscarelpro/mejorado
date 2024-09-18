<?php 
include 'conexion.php';

$conteo_producto=mysqli_query($conex,"SELECT COUNT(*) from tbl_producto;");
if($conteo_producto){
    while($var1=mysqli_fetch_array($conteo_producto)){
      $respuesta=$var1[0];
    }
}

?>