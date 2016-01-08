<?php
  session_start(); // Inicia la sesión
  error_reporting(0);
  
  $carrito =& $_SESSION['carrito'];
  $producto =& $_SESSION['producto'];
  
  $detalleProd = $_POST['detalleProducto'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tema 6 - Ejercicio 6: Detalle de <?=$detalleProd?></title>
    <link rel="stylesheet" href="/styles/e5T6.css">
    <style>
      
    </style>
  </head>
  <body>
    <div id="container">
      <h2 class="centrado">Tienda on-line </h2> 
      <div id="catalogo">
        <h3>Productos</h3>
        <?php    
        if(isset($detalleProd)) {
            $numProductos = count($producto);
            for ($i = 0; $i < $numProductos; $i++) {
              if ((($producto[$i]['nombre']) == $detalleProd)) {
                $nombreProducto = $producto[$i]['nombre'];
                echo "<form action=\"e6T6TiendaDetalle.php\" method=\"post\">";
                echo "<div class=\"producto\">";
                echo "<img src=".$producto[$i]['imagen']."><input name=\"nuevoProducto\" type=\"hidden\" value=".$detalleProd.">";
                echo "<p>".$producto[$i]['nombre']."</p>";
                echo "<p>".$producto[$i]['detalle']."</p>";
                echo "<p>". $producto[$i]['precio']. "€/kg</p>";
                echo "<input type=\"submit\" value=\"Comprar\">";          
                echo "</div>";
                echo "</form>";
                
              }
            }      
          }

        ?>  
      </div>
        <?php          
          // Añadir al carrito
          $nuevoProd = $_POST['nuevoProducto'];
          if(isset($nuevoProd)) {
            foreach ($carrito as $prod => $cant) {
              if (($prod == $nuevoProd)) {
                $cant++;
                $carrito[$prod] = $cant;
              }
            }      
          }
          
          //Eliminar producto
          $eliminarProd = $_POST['eliminarProducto'];
          if(isset($eliminarProd)) {
            foreach ($carrito as $prod => $cant) {
              if (($prod == $eliminarProd)) {
                $carrito[$prod] = 0;
              }
            }      
          } 
        ?>
    </div>    
  </body>
</html>
