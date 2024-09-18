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
        <center><h3>NUEVO PRODUCTO</h3></center>

</div>
</div>
  
  <div class="container">
  <form class="row g-3"  method="post" action="../modell/procesar_producto.php">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">SKU</label>
    <input type="text" class="form-control" id="inputEmail4" name="sku">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Producto</label>
    <input type="text" class="form-control" id="inputEmail4" name="producto">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Precio</label>
    <input type="text" class="form-control" id="inputPassword4" name="precio" >
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="CANTIDAD" name="cantidad" >
  </div>
  <div class="form-group col-md-4 ">
           <label for="exampleFormControlInput1">ubicacion</label>
           <?php 
   $resultado=mysqli_query($conex,"SELECT * FROM tbl_ubicacion");
   $row=mysqli_num_rows($resultado);
   
   echo "<select name='id_ubicacion' id='id_ubicacion' onChange='ejecutarAjax(this.value)' class='form-control'>" ; 

 //echo "<option value='todo'>Seleccione un Estado. </option>";
        if($row>0){
             do{
             echo "<option value='".$var['id_ubicacion']."'>".utf8_encode($var['nombre'])." </option>";   
             }while ($var=mysqli_fetch_array($resultado));
           }
       echo "</select>";
       ?>
       </div> 
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Stock Minimo</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="INGRESE LA CANTIDAD MINIMA " name="cant_mini" >
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">REGISTRAR</button>
  </div>
</form>


  </div>






  
</body>
</html>