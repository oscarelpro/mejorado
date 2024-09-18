<?php 
include 'menu.php';
require_once '../controller/conexion.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
NUEVO
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVO USUARIO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3 needs-validation" action="../modell/add_usuario.php" method="POST" >
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">USUARIO</label>
    <input type="text" class="form-control" id="validationCustom01" name="usuario" required>
  
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">PASSWORD</label>
    <input type="text" class="form-control" id="validationCustom02" name="pass" required>
  
  </div>
  <div class="col-md-4 ">
           <label for="exampleFormControlInput1">PERMISO</label>
           <?php 
   $resultado=mysqli_query($conex,"SELECT * FROM tbl_roll");
   $row=mysqli_num_rows($resultado);
   
   echo "<select name='id_roll' id='id_roll' onChange='ejecutarAjax(this.value)' class='form-control'>" ; 

 //echo "<option value='todo'>Seleccione un Estado. </option>";
        if($row>0){
             do{
             echo "<option value='".$var['id_roll']."'>".utf8_encode($var['tipo_user'])." </option>";   
             }while ($var=mysqli_fetch_array($resultado));
           }
       echo "</select>";
       ?>
       </div> 

 <div class="col-md-4">
    <button type="submit" class="btn btn-primary">GUARDAR</button>

    </div>
</form>
      </div>
      
    </div>
  </div>
</div>
</body>
</html>