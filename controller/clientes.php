<?
include 'conexion.php';

///consulta para mostrar los clientes y mandarlo al apartado de clientes  
$clientes=mysqli_query($conex,"SELECT * from tbl_cliente");
if($cliente){
    while($muestra=mysqli_fetch_array($cliente)){
       $nombre=$muestra=[1];
        $apellido=$muestra=[2];
        $cedula=$muestra=[3];
        $telefono=$muestra=[4];
    }
}



?>