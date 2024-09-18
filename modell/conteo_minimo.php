<?php 
//hago referencia al archivo de conexion
include '../controller/conexion.php';

//hago un llamado a la base de datos 
$sql=mysqli_query($conex,"SELECT * FROM tbl_producto WHERE  sku = '123456' ");

//realizo un rastreo del 
while($var1=mysqli_fetch_array($sql)){

$total=$var1[4];//cantidad ingresada por el usuario 20
$minimo=$var1[5];//este es el stock minimo 10


};
if($total==$minimo){
    echo 'el producto ya llego a su stock minimo, debe reponer ';
    
}else{
    echo 'puebe seguir ';
}

?>