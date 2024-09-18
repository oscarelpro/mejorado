<?php 
include '../controller/conexion.php';
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="alert alert-primary" role="alert">
        <center><h3>MODULO DE VENTAS</h3></center>

</div>
</div>



    <div class="container">
        <form action="../modell/procesar_venta.php" method="post">
    <input class="form-control" type="text"  aria-label="readonly input example" placeholder="INGRESE EL PRODUCTO" readonly>
    </form>
    </div>
</body>
</html>