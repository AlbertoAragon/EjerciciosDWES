<!--
Amplía el programa anterior de tal forma que se pueda ver el detalle de un producto. Para ello, cada
uno de los productos del catálogo deberá tener un botón *Detalle que, al ser accionado, debe llevar
al usuario a la vista de detalle que contendrá una descripción exhaustiva del producto en cuestión.
Se podrán añadir productos al carrito tanto desde la vista de listado como desde la vista de detalle.
-->
<?php
  session_start(); // Inicia la sesión
  error_reporting(0);
  
  $producto =& $_SESSION['producto'];
  
  $producto = array (
    array( "nombre" => "cereza", "precio" => 2, "imagen" => "images/cereza.jpg", "detalle" => "Cerezas frescas"),
    array( "nombre" => "mango", "precio" => 3, "imagen" => "images/mango.jpg", "detalle" => "Mango de Málaga"),
    array( "nombre" => "coco", "precio" => 2.5, "imagen" => "images/coco.jpg", "detalle" => "Coco tropical"),
  );
  
  $carrito =& $_SESSION['carrito'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tema 6 - Ejercicio 6: Tienda detallada</title>
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
        $numProductos = count($producto);
        for ($i = 0; $i < $numProductos; $i++) {
          $nombreProducto = $producto[$i]['nombre'];
          echo "<form action=\"#\" method=\"post\">";
          echo "<div class=\"producto\">";
          echo "<img src=".$producto[$i]['imagen']."><input name=\"nuevoProducto\" type=\"hidden\" value=".$nombreProducto.">";
          echo "<p>".$producto[$i]['nombre']."</p>";
          echo "<p>". $producto[$i]['precio']. "€/kg</p>";
          echo "<input type=\"submit\" value=\"Comprar\">";          
          echo "</div>";
          echo "</form>";
          echo "<form action=\"e6T6Detalle.php\" method=\"post\">";
          echo "<input type=\"submit\" value=\"Detalle\">";
          echo "<input name=\"detalleProducto\" type=\"hidden\" value=".$nombreProducto.">";
          echo "</form>";
        }
        ?>  
      </div>

      <div id="carrito">
        <h3>Carrito</h3>
        <?php  
          if(!isset($carrito)) {
            //Crear carrito
            $carrito = array( "cereza" => 0, "mango" => 0, "coco" => 0); 
            //echo "El carrito está vacío";
          } 
          
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
          
          //Mostrar carrito
          if(isset($carrito)) {
            $productosComprados = count($carrito);
            for ($i = 0; $i < $productosComprados; $i++) {
              $nombreProducto = $producto[$i]['nombre'];
              echo "<form action=\"#\" method=\"post\">";
              echo "<div class=\"carrito\">";
              echo "<img src=".$producto[$i]['imagen'].">";
              echo "<p>".$producto[$i]['nombre']."</p>";
              echo "<p>". $producto[$i]['precio']. "€/kg</p>";
              echo "<p>cantidad: ". $carrito[$producto[$i]['nombre']]. " kg</p>";
              echo "<input type=\"submit\" value=\"Eliminar\">";
              echo "<input name=\"eliminarProducto\" type=\"hidden\" value=".$nombreProducto.">";
              echo "</div>";
              echo "</form>";
              $total += (($producto[$i]['precio']) * ($carrito[$producto[$i]['nombre']]));
            }
            echo "<br><p>Total: ". $total. " €</p>";
          }          
          
          

        ?>
      </div>
    </div>    
  </body>
</html>
