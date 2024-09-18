<?php 
include 'menu.php';
include '../controller/conexion.php';
error_reporting(0);
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
        <center><h3>AJUSTE DE INVENTARIO</h3></center>

</div>
</div>
    <div class="container">
    <form class="row g-3 needs-validation" method="POST">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">CODIGO</label>
    <input type="text" class="form-control" id="validationCustom01" name="codigo" >
    
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">NOMBRE</label>
    <input type="text" class="form-control" name="nombre" id="validationCustom02"  >
  
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Procesar</button>
  </div>
</form>
    </div>
    <?php 
 if(isset($_POST['codigo'])Or($_POST['nombre'])){
    ?>
   
    <table class="table  table-dark table-striped  container">
  <thead class="thead-dark">
    <tr>
      <th scope="col">PRODUCTO</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">UBICACION</th>
      <th scope="col">ACCION</th>
      
      
     
 
    </tr>
  </thead>
  <tbody>
   <?php
      //consula multi tabla para obtener categoria y ubicacion de los productos
   
      // se procede a la busqueda por codigo de barra
      
      $consulta=mysqli_query($conex,"SELECT pr.producto,pu.cantidad,pu.id_ubicacion,ub.nombre from tbl_producto pr INNER JOIN tbl_producto_ubicacion pu ON pr.id_producto = pu.id_producto INNER JOIN tbl_ubicacion ub ON pu.id_ubicacion= ub.id_ubicacion where pr.sku='$_POST[codigo]' Or pr.producto='$_POST[nombre]'");
      while($var1=mysqli_fetch_array($consulta)){
      
      ?>
    <tr>
   
      <td><?php echo $var1[0];?></td>
      <td><input type="text" value="<?php echo $var1[1]; ?>"  name="cantidad1"></td>
      <td><?php echo $var1[2];?></td>
      <td><div class="col-12">
      <button class="btn btn-primary" type="submit" value="<?php $var1[2];?>">VALIDAR</button>
      </div></td>
     
   
      
    
      
     
      <?php  }?>
    </tr>
  
   
  </tbody>
</table>

    
<?php
    
  }


?>
</body>
</html>