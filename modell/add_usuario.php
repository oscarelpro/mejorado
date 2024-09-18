<?php 
include '../controller/conexion.php';
///recepcion del foprmulario de usuarios

$usuario =$_POST['usuario'];

$clave=$_POST['pass'];
$tipo=$_POST['id_roll']; 

echo $usuario;
echo '<br>';

//conprobar si el registro no existe
//consultar todos los usuarios 
$comprobacion1=mysqli_query($conex,"SELECT * FROM tbl_user");
while($var1=mysqli_fetch_array($comprobacion1)){
$var1[1];
$nueva1=$var1[1];
echo $nueva1;
}
//devolucion de la consulta
if (strcmp($nueva1, $usuario) == 1) {
    echo 'no puede';
}else{
    echo'dale play';
    echo $nueva1;
}

?>