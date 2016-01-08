<!--
Crea una tienda on-line sencilla con un catálogo de productos y un carrito de la compra. Un
catálogo de cuatro o cinco productos será suficiente. De cada producto se debe conocer al menos
la descripción y el precio. Todos los productos deben tener una imagen que los identifique. Al lado
de cada producto del catálogo deberá aparecer un botón Comprar que permita añadirlo al carrito.
Si el usuario hace clic en el botón Comprar de un producto que ya estaba en el carrito, se deberá
incrementar el número de unidades de dicho producto. Para cada producto que aparece en el carrito,
habrá un botón Eliminar por si el usuario se arrepiente y quiere quitar un producto concreto del
carrito de la compra. A continuación se muestra una captura de pantalla de una posible solución.
-->
<?php
  session_start(); // Inicia la sesión
  error_reporting(0);
 
  $producto = array (
    array( "nombre" => "cereza", "precio" => 2, "imagen" => "images/cereza.jpg"),
    array( "nombre" => "mango", "precio" => 3, "imagen" => "images/mango.jpg"),
    array( "nombre" => "coco", "precio" => 2.5, "imagen" => "images/coco.jpg"),
  );
  
  $carrito =& $_SESSION['carrito'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tema 6 - Ejercicio 5: Tienda</title>
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
