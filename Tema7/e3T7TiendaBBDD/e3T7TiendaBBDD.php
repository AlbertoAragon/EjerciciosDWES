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
  
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'root';
  $dbname = 'tienda';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
<?php
  //Conexión a la BBDD
  try {
    $conexion = new PDO("mysql:host={$dbhost};dbname={$dbname};charset=utf8",$dbuser/*, $dbpass*/);
  } catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die ("Error: " . $e->getMessage());
  }

  $consulta = $conexion->query("SELECT codigo, nombre, precio, imagen FROM producto");
  
  $carrito =& $_SESSION['carrito'];
?>

    <title>Tema 7 - Ejercicio 3: Tienda con BBDD</title>
    <link rel="stylesheet" href="../styles/e3T7.css">
    <style>
      
    </style>
  </head>
  <body>
    <div id="container">
      <h2 class="centrado">Tienda on-line </h2> 
      <div id="catalogo">
        <h3>Productos</h3>
        <table border="1">
          <tr>
            <td><b>Código</b></td>
            <td><b>Nombre</b></td>
            <td><b>Precio</b></td>
            <td><b>Imagen</b></td>
          </tr>

           <?php         
            // Obtener número total de registros
            $numProductos = $conexion->query('select count(*) from producto')->fetchColumn(); 

            while ($producto = $consulta->fetchObject()) {
            ?>
          <tr>
            <td><img src="<?= $producto->imagen ?>"></td>
            <td><b><form action="#" method="post">
                <input name="nuevoProducto" type="hidden" value="<?= $producto->nombre ?>">
                <input type="submit" value="Comprar">
              </div>
            </form></b></td>
            <td><?= $producto->nombre ?></td>
            <td><?= $producto->precio ?> €/kg</td>
          </tr>  
        
        <?php              
        }
        ?>
        </table>  
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
            $consulta = $conexion->query("SELECT codigo, nombre, precio, imagen FROM producto");
            while ($producto = $consulta->fetchObject()) {
              ?>             
              <form action="#" method="post">
                <div class="carrito">
                  <img src="<?= $producto->imagen ?>">
                  <p><?= $producto->nombre ?></p>
                  <p><?= $producto->precio ?> €/kg</p>
                  <p>cantidad: <?= $carrito[$producto->nombre]?> kg</p>
                  <input type="submit" value="Eliminar">
                  <input name="eliminarProducto" type="hidden" value="<?= $producto->nombre ?>">
                </div>
              </form>
              <?php
              $total += (($producto->precio) * ($carrito[$producto->precio]));
            }
            echo "<br><p>Total: ". $total. " €</p>";
          }          
        ?>
      </div>
    </div>    
  </body>
</html>
