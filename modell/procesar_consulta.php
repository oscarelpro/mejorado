<?php 
 if(isset($_POST['codigo'])){
    ?>
   
    <table class="table  table-dark table-striped  container">
  <thead class="thead-dark">
    <tr>
      <th scope="col">PRODUCTO</th>
      <th scope="col">STOCK</th>
      <th scope="col">SKU</th>
      <th scope="col">PRECIO</th>
      <th scope="col">DETALLE</th>
      <th scope="col">CATEGORIA</th>
      <th scope="col">UBICACION</th>
 
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
      <td><?php echo $var1[5];?></td>
      <td><?php echo $var1[6];?></td>
      
    
      
     
      <?php  }?>
    </tr>
  
   
  </tbody>
</table>

    
<?php
    
  }


?>