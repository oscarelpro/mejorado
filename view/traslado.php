<?php 
include 'menu.php';
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
        <center><h3>TRASLADO ENTRE ALMACENES</h3></center>

</div>
</div>
   

<div class="container">

  
<form class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Producto</label>
    <input type="text" class="form-control" id="validationDefault01"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="validationDefault02"  required>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Ubicacion</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
  </div>
 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">PROCESAR</button>
  </div>
</form>
</div>
</body>
</html>