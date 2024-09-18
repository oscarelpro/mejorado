<?php 
include 'menu.php';
require_once '../controller/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
<div class="container">
    <div class="alert alert-primary" role="alert">
        <center><h3>BUSCAR PRODUCTO</h3></center>

</div>
</div>

<form class="form-inline container" method="post" >
 
 <div class="form-group mx-sm-3 mb-2">
   
   <input type="text" class="form-control" id="inputPassword2" placeholder="busqueda" name="codigo">
 </div>
 <center><button type="submit" class="btn btn-primary mb-2">Buscar</button></center>
</form>

<?php 
 if(isset($_POST['codigo'])or($_POST['nombre'])){
    ?>
   
    <table class="table  table-dark table-striped  container">
  <thead class="thead-dark">
    <tr>
      <th scope="col">PRODUCTO</th>
      <th scope="col">CODIGO</th>
      <th scope="col">PRECIO</th>
      <th scope="col">TIENDA</th>
      <th scope="col">ALMACEN</th>
      
     
 
    </tr>
  </thead>
  <tbody>
   <?php
      //consula multi tabla para obtener categoria y ubicacion de los productos
   
      // se procede a la busqueda por codigo de barra
      
      $consulta=mysqli_query($conex,"SELECT * from tbl_producto where sku='$_POST[codigo]'");
      while($var1=mysqli_fetch_array($consulta)){
      
      ?>
    <tr>
      <td><?php echo $var1[0];?></td>
      <td><?php echo $var1[1];?></td>
      <td><?php echo $var1[2];?></td>
      <td><?php echo $var1[3].'$';?></td>
      <td><?php echo $var1[4];?></td>
   
      
    
      
     
      <?php  }?>
    </tr>
  
   
  </tbody>
</table>

    
<?php
    
  }


?>
 
  
</body>
</html>