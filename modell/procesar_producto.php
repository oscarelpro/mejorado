<?php 
include '../controller/conexion.php';

$sku=$_POST['sku'];
$producto=$_POST['producto'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$cant_mini=$_POST['cant_mini'];
$ubicacion=$_POST['id_ubicacion'];
///validacion de codigo de barar en bd

$verifica=mysqli_query($conex,"SELECT sku FROM tbl_producto where sku='$sku'");
   if(mysqli_num_rows($verifica)==1){
echo'este producto ya eexiste';
   }else{
   //en  este paso el producto esta listo para ser creado

   $insertar=mysqli_query($conex,"INSERT INTO tbl_producto (id_producto,sku,producto) VALUE ('','$sku','$producto','$precio','$cantidad','$cant_mini','$ubicacion') ");
if($insertar){
    echo'bien hecho';
}else{
    echo 'eerror';
    echo '<br>'.$sku;
    echo '<br>'.$producto;
    echo '<br>'.$precio;
    echo '<br>'.$cantidad;
    echo '<br>'.$cant_mini;
    echo '<br>'.$ubicacion;

}
   }
?>