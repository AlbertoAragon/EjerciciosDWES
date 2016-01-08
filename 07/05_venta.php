<h2 class="text-center text-primary">G E S T I S I M A L venta</h2>
<br>
<?php // Tienda ///////////////////////////////////////////////////////
error_reporting(0);
  // Vuelca el contenido da la tabla catalogo en el array $producto

  $conexion = mysql_connect("localhost", "root");
  mysql_select_db("gestisimal", $conexion);
  mysql_set_charset('utf8');
  
  // Listado /////////////////////////////////////////////////
  //$$datosTienda = "SELECT codigo, descripcion, precio_venta, stock FROM articulo ORDER BY codigo"; //*LIMIT ".(($_SESSION['pagina'] - 1) * 5).", 5";
  //$consulta = mysql_query($$datosTienda, $conexion);
  // Listado /////////////////////////////////////////////////

  // Listado /////////////////////////////////////////////////
    $listadoArticulos = "SELECT codigo, descripcion, precio_compra, precio_venta, stock FROM articulo ORDER BY descripcion";// LIMIT ".(($_SESSION['pagina'] - 1) * 5).", 5";
    $consulta = mysql_query($listadoArticulos, $conexion);
    // Listado /////////////////////////////////////////////////
  
  //$datosTienda = "SELECT codigo, nombre, precio, imagen, detalle FROM catalogo";
  //$consulta = mysql_query($datosTienda, $conexion);
   /*
  while ($registro = mysql_fetch_array($consulta)) {
    $producto[$registro[codigo]] = array(
      "descripcion" => $registro[descripcion],
      "precio" => $registro[precio_venta],
      "stock" => $registro[stock]
    );
  }
*/
  

  // Muestra el catálogo de productos de la tienda.
  ?>
  <div class="row">
    <div class="col-md-7">
      <?php
      //foreach ($producto as $codigo => $elemento) {
      ?>
        <div class="panel-info">
          <!--<div class="panel-heading"><h4><?=$elemento[descripcion]?></h4></div>-->
          <div class="panel-body">
             <table  class="table table-condensed">
      <tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Disponible</th>
        <th>Cantidad</th>
      </tr>

    <?php
    while ($registro = mysql_fetch_array($consulta)) {
      ?>
      <tr>
        <td><?=$registro[codigo]?></td>
        <td><?=$registro[descripcion]?></td>
        <td><?=$registro[precio_venta]?> €</td>
        <td><?=$registro[stock]?> ud.</td>
        <td>
          <form action="pagina.php" method="post" class="form-inline">
            <input type="hidden" name="ejercicio" value="05_venta">
            <input type="hidden" name="codigo" value="<?=$registro[codigo]?>">
            <input type="hidden" name="descripcion" value="<?=$registro[descripcion]?>">
            <input type="hidden" name="precio_compra" value="<?=$registro[precio_compra]?>">
            <input type="hidden" name="precio_venta" value="<?=$registro[precio_venta]?>">
            <input type="number" style="width: 70px;" name="cantidad" min="1" max="<?=$registro[stock]?>">
            <input type="hidden" name="accion" value="comprar">
            <button type="submit" class="btn btn-primary">Añadir</button>
          </form>
        </td>
      </tr>
      <?php
    }
    ?>
</table>
 
            
          </div>
        </div>
        <?php
      //}
      ?>
    </div>
    
    <div class="col-md-1"></div>
    
    <div class="col-md-4">

      <?php // Carrito ///////////////////////////////////////////////////////
      
      // Listado Carrito/////////////////////////////////////////////////
    $listadoArticulos2 = "SELECT codigo, descripcion, precio_compra, precio_venta, stock FROM articulo ORDER BY descripcion";// LIMIT ".(($_SESSION['pagina'] - 1) * 5).", 5";
    $consultaCarrito = mysql_query($listadoArticulos2, $conexion);
    // Listado /////////////////////////////////////////////////
    
  while ($registro = mysql_fetch_array($consultaCarrito)) {
    $producto[$registro[codigo]] = array(
      "nombre" => $registro[nombre],
      "precio" => $registro[precio_venta],
    );
  }  
    
  $_SESSION['producto'] = $producto;
  
  
      $accion = $_POST['accion'];
      $codigo = $_POST['codigo'];

      // Inicializa el carrito la primera vez
      if (!isset($_SESSION[carrito])) {
        foreach ($_SESSION as $key => $value) {
          $_SESSION[carrito][$key] = 0;
        }
      }

      if ($accion == "comprar") {
        //$_SESSION[carrito][$codigo]++;
        $_SESSION[carrito][$codigo]+=$_POST['cantidad'];
      }

      if ($accion == "eliminar") {
        $_SESSION[carrito][$codigo] = 0;
      }
      
      if ($accion == "restar") {
        $_SESSION[carrito][$codigo]-=$_POST['cantidad'];
      }
      
      if ($accion == "reiniciar") {
        unset($_SESSION['carrito']);
      }

      // Muestra el contenido del carrito
      $total = 0;
      ?>
      <div class="panel-success">
          <div class="panel-heading">
            <h4>Carrito <span class="glyphicon glyphicon-shopping-cart"></span></h4>
          </div>
          <div class="panel-body">
            <?php
            foreach ($producto as $cod => $elemento) {
              if ($_SESSION[carrito][$cod] > 0) {
                
                $total = $total + ($_SESSION[carrito][$cod] * $elemento[precio]);
                ?>
                Codigo:<?=$cod?><br>                
                Precio: <?=$elemento[precio]?> €<br>
                Unidades: <?=$_SESSION[carrito][$cod]?>
                <form class="form-inline" action="pagina.php" method="post">
                 
                  <input type="hidden" name="ejercicio" value="05_venta">
                  <input type="hidden" name="codigo" value="<?=$cod?>">
                  <input type="hidden" name="accion" value="restar">
                  <input type="number" style="width: 70px;" name="cantidad" min="1" max="<?=$_SESSION[carrito][$cod]?>">
                  <button type="submit" style="margin-bottom: 10px;margin-top: 10px;" class="btn btn-warning">
                    <span class="glyphicon glyphicon-minus"></span>
                  </button>
                </form>
                <form action="pagina.php" method="post">
                  <input type="hidden" name="ejercicio" value="05_venta">
                  <input type="hidden" name="codigo" value="<?=$cod?>">
                  <input type="hidden" name="accion" value="eliminar">
                  <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                    Eliminar
                  </button>
                </form><br><br>
                <?php
              }
            }
            ?>
            <div class="panel-footer"><b>Total: <?=$total?> €</b></div>
            <a class="btn btn-danger" href="pagina.php?ejercicio=05_factura" role="button">Factura</a>
            <a class="btn btn-primary" href="pagina.php?ejercicio=05" role="button">Volver</a>
          </div>
      </div>
    </div>
  </div>